<?php include ('templates/header-main.php'); ?>

    <!-- Add Listing -->
    <section class="add-listing-section">
        <div class="auto-container">
            <div class="row">
                <!-- Sidebar Column -->
                <div class="sidebar-column sidebar-side sticky-container col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar theiaStickySidebar">
                        <div class="sticky-sidebar">
                            <ul class="listing-content-list">
                                <li data-target="#General" class="active"><span class="icon flaticon-house"></span> General</li>
                                <li data-target="#Images"><span class="icon flaticon-gallery"></span> Images</li>
                                <li data-target="#Contact-Information"><span class="icon flaticon-phone-call-1"></span> Contact Information</li>
                                <li data-target="#Social-Networks"><span class="icon flaticon-share"></span> Social Networks</li>
                                <li data-target="#Location"><span class="icon flaticon-pin"></span> Location</li>
                                <li data-target="#Video"><span class="icon flaticon-button"></span> Video</li>
                            </ul>
                        </div>
                    </aside>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <!-- Form Widget -->
                    <div class="form-widget ls-widget" id="General">
                        <div class="widget-title"><h4><span class="icon flaticon-house"></span> General</h4></div>
                        <div class="widget-content">

                            <div class="default-form">
                                <form>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tagline</label>
                                        <input type="text" name="Tagline" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="message"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Uploading Widget -->
                    <div class="uploading-widget ls-widget" id="Images">
                        <div class="widget-title"><h4><span class="icon flaticon-gallery"></span> Images</h4></div>
                        <div class="widget-content">
                            <div class="uploading-outer">
                                <div class="uploadButton">
                                    <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/>
                                    <label class="uploadButton-button ripple-effect" for="upload">Upload Logo</label>
                                    <span class="uploadButton-file-name"></span>
                                </div>
                            </div>
                            <div class="bottom-text">Maximum file size: 2 MB.</div>
                        </div>
                    </div>

                    <!-- Form Widget -->
                    <div class="form-widget ls-widget" id="Contact-Information">
                        <div class="widget-title"><h4><span class="icon flaticon-house"></span> Contact Information</h4></div>
                        <div class="widget-content">
                            <div class="default-form">
                                <form>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone number (optional)</label>
                                        <input type="text" name="Tagline" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Website (optional)</label>
                                        <input type="text" name="Tagline" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form Widget -->
                    <div class="form-widget ls-widget" id="Social-Networks">
                        <div class="widget-title"><h4><span class="icon flaticon-user"></span> Social Networks</h4></div>
                        <div class="widget-content">
                            <div class="default-form">
                                <form>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="fname" placeholder="" required>
                                        <span class="icon fab fa-twitter"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="fname" placeholder="" required>
                                        <span class="icon fab fa-facebook"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text" name="fname" placeholder="" required>
                                        <span class="icon fab fa-linkedin-in"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="fname" placeholder="" required>
                                        <span class="icon fab fa-instagram"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form Widget -->
                    <div class="form-widget ls-widget" id="Location">
                        <div class="widget-title"><h4><span class="icon flaticon-pin"></span> Location</h4></div>
                        <div class="widget-content">
                            <div class="default-form">
                                <form>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="City" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="State" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Zip-Code</label>
                                        <input type="text" name="State" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form Widget -->
                    <div class="form-widget ls-widget" id="Video">
                        <div class="widget-title"><h4><span class="icon flaticon-button"></span> Video</h4></div>
                        <div class="widget-content">
                            <div class="default-form">
                                <form>
                                    <div class="form-group">
                                        <label>Video</label>
                                        <input type="text" name="City" placeholder="Video Link" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="btn-box margin-bottom-20">
                        <button type="submit" class="theme-btn btn-style-two w-100">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Add Listing -->
    <?php include ('templates/footer.php'); ?>