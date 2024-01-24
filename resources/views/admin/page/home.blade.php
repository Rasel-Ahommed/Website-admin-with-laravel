@include('admin/header')

<section class="page-content">
    <div class="page-head">
        <h1>Page / Home</h1>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Banner Section - 1</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i id="editEnable" class="ri-pencil-fill"></i>
                    <i id="editDisable" class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <div class="section-body">
            <form action="#">
                <div class="img-element-group">
                    <div class="img-group" id="hero1">
                        <img id="heroimg"/>
                        <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                    </div>
                    <div class="img-group" id="hero2">
                        <img id="heroimg"/>
                        <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                    </div>
                    <div class="img-group" id="hero3">
                        <img id="heroimg"/>
                        <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                    </div>
                    <div class="img-group" id="hero4">
                        <img id="heroimg"/>
                        <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                    </div>
                    <div class="img-group" id="hero5">
                        <img id="heroimg"/>
                        <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    <button type="cancel" onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>About us - 2</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i class="ri-pencil-fill"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="#">
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-title">
                            <label for="title">
                                Title
                                <input class="input-item" type="text" name="title" id="title" placeholder="Enter Title" value="We Provide Best Education Services For You" disabled>
                            </label>
                        </div>
                        <div class="text-para">
                            <label for="paragraph">
                                Paragraph
                                <textarea class="input-item" name="paragraph" id="paragraph" placeholder="Enter Paragraph" disabled></textarea>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    <button type="cancel" onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Message From VC - 3</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i class="ri-pencil-fill"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="#">
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-title">
                            <label for="title">
                                Title
                                <input class="input-item" type="text" name="title" id="title" placeholder="Enter Title" value="Massage from vice chancellor" disabled>
                            </label>
                        </div>
                        <div class="text-para">
                            <label for="paragraph">
                                Paragraph
                                <textarea class="input-item" name="paragraph" id="paragraph" placeholder="Enter Paragraph" disabled></textarea>
                            </label>
                        </div>
                        <div class="text-img" id="hero6">
                            <img class="img-group" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                        <div class="text-name">
                            <label for="text-name">
                                Name
                                <input class="input-item" type="text" name="text-name" id="text-name" placeholder="Enter Name" value="Professor Dr. Md. Mahbubur Rahman" disabled>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    <button type="cancel" onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="section shadow">
        <div class="section-head">
            <h1>Campus Life - 4</h1>
            <div class="editbtn">
                <button onclick="editSection(this)">
                    <i class="ri-pencil-fill"></i>
                </button>
            </div>
        </div>
        <div class="section-body pt30">
            <form action="#">
                <div class="text-section">
                    <div class="text-content">
                        <div class="text-img">
                            <img class="img-group" id="heroimg"/>
                            <input type="file" accept="image/*" name="image" class="filehero inpbox" onchange="loadFile(this)"/>
                        </div>
                    </div>
                </div>
                <div class="sectionSubmit">
                    <input type="submit" value="Submit">
                    <button type="cancel" onclick="editSection(this?.parentNode?.parentNode?.parentNode?.parentNode?.children[0]?.children[1]?.children[0])">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin/footer')