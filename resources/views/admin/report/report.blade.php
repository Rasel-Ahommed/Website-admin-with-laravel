@include('admin/header')

<section class="report">
        <div class="page-head">
            <h1>Report</h1>
        </div>
    <div class="report-problem shadow">
        <div class="contact">
            <div class="contact-heading">
                <h1>
                    Report a Problem
                </h1>
                <p>
                    Please provide as much detail as possible so we can better identify the problem.
                </p>
            </div>
            <form action="#">
                <label for="time">
                    When (time/date) did the problem occur?
                    <input class="input-item" type="datetime" name="time" id="problemTime">
                </label>
                <label for="message">
                    What is the exact error message that you received?
                    <textarea class="input-item" name="message" id="paragraph" rows="5"></textarea>
                </label>
                <label for="number">
                    Feedback Phone number
                    <input class="input-item" type="number" name="number" id="number">
                </label>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</section>

@include('admin/footer')