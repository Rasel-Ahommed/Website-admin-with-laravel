<?php

namespace App\Http\Controllers\adminController\aboutController;

use App\Models\Activities;
use App\Models\EventImage;
use Illuminate\Http\Request;
use App\Models\NewsAndEvents;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class eventsController extends Controller
{
    use ImageUploadTrait;
    public function Index()
    {
        return view('admin/page/about/events');
    }

    // store news and events 
    public function Store(Request $request)
    {
        // Validation rules
        $request->validate([
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'event_location' => 'required',
            'event_title' => 'required',
            'event_text' => 'required',
        ]);


        // remove html tags 
        $event_text = strip_tags($request->event_text);

        $data['event_title'] = $request->event_title;
        $data['event_text'] = $event_text;
        $data['location'] = $request->event_location;
        $data['date'] = $request->event_date;
        $data['s_time'] = $request->start_time;
        $data['e_time'] = $request->end_time;

        NewsAndEvents::create($data);
        return redirect()->back()->with('success', 'The event has been successfully created');
    }

    // edit events 
    public function Edit($id)
    {
        $id = decrypt($id);
        $data = NewsAndEvents::FindorFail($id);
        return view('admin/page/about/editEvent', compact('data'));
    }

    // update news and events 
    public function Update(Request $request, $id)
    {
        // Validation rules
        $request->validate([
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'event_location' => 'required',
            'event_title' => 'required',
            'event_text' => 'required',
        ]);
        $id = decrypt($id);
        // Check if the notice record exists
        $data = NewsAndEvents::find($id);

        // remove html tags 
        $event_text = strip_tags($request->event_text);

        $data->event_title = $request->event_title;
        $data->event_text = $event_text;
        $data->location = $request->event_location;
        $data->date = $request->event_date;
        $data->s_time = $request->start_time;
        $data->e_time = $request->end_time;

        $data->save();

        // save update record 
        $activites['name'] = 'Event Controller section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        return redirect()->route('event')->with('success', 'Changes have been successfully saved');
    }

    // delete event
    public function Destroy($id)
    {
        $id = decrypt($id);
        // Check if the notice record exists
        $data = NewsAndEvents::find($id);

        if ($data) {

            $imgs = EventImage::where('event_id', $id)->get();
            foreach ($imgs as $img) {
                // Delete the associated file from storage
                Storage::delete('public/eventImage/' . $img->e_img);
            }

            $data->delete();
            return redirect()->back()->with('success', 'The event has been successfully deleted');
        } else {
            // Handle the case where the notice record does not exist
            return redirect()->back()->with('error', 'Event not found.');
        }
    }

    // view event image page
    public function EventImgIndex($id)
    {
        // $id = decrypt($id);
        $data = EventImage::where('event_id', $id)->get();

        return view("admin/page/about/event_img", compact('id', 'data'));
    }

    // store event img 
    public function StoreEventImg(Request $request, $id)
    {
        $id = decrypt($id);
        $request->validate([
            'eventImg.*' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        $event = NewsAndEvents::FindorFail($id);

        $imageData = [];

        if ($files = $request->file('eventImg')) {

            foreach ($files as $key => $file) {

                // Generate a unique file name
                $fileName = time() . '_' . 'user' . '.' . $file->getClientOriginalExtension();

                // Move the file to the custom folder
                $path = $file->move("sitedata/event_image", $fileName);
                $relativePath = str_replace(public_path(), '', $path);

                // store data in array 
                $imageData[]=[
                    'event_id' => $event->id,
                    'e_img' => $relativePath,
                ];
            }
        }
        EventImage::insert($imageData);
        return redirect()->back()->with('success','The images has been successfully added');
    }

    public function DeleteEventImg($id)
    {
        $data = EventImage::FindOrFail($id);

        if ($data) {
            // Delete the associated file from storage
            if( $data->e_img && file_exists($data->e_img)){
                unlink($data->e_img);
            }
             $data->delete();
            return redirect()->back()->with('delete', 'The image has been successfully deleted');
           
        }
    }
}
