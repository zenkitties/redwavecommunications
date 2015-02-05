<?php /* Template Name: Contact Us Template */ get_header(); ?>

    <main role="main">
        <h3 class="breadcrumbs"><?php the_title(); ?></h3>

<!--==================== contact start =======================-->

<div class="col-md-24 contact-container">
    <div class="col-md-4" id="contact-info">


        <b>Central Valley</b><br />
        3582 W Holland Ave<br />
        Fresno, California 93722<br />
        Phone 559.271.9350<br />
        FAX 559.271.9354<br /><br />

        <b>Central Coast</b><br />
        316 Mid Valley Center<br />
        PO BOX 217<br />
        Carmel, CA 93923<br />
        Phone 831.646.5329<br />

        <p>info@redwavecomm.com</p>
    </div>
    <div class="col-md-20">
        <form class="form-horizontal contact-form">
            <div class="form-group">
                <label name="firstName" class="col-sm-3 control-label">First Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="col-sm-3 form-control" id="firstName" placeholder="first name...">
                </div>
            </div>
            <div class="form-group">
                <label name="lastName" class="col-sm-3 control-label">Last Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastName" placeholder="last name...">
                </div>
            </div>
            <div class="form-group">
                <label name="email" class="col-sm-3 control-label">E-mail:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="eMail" placeholder="e-mail...">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label>
                        <input class="buttons" type="radio" name="area" value="residential" checked>Residential
                        <input class="buttons" type="radio" name="area" value="business">Business
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-11">
                    <label class="control-label">Select Topic:</label>
                    <select id="topics" class="form-control">
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                        <option value="4">four</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-11">
                    <label class="col-sm-5 control-label">Questions:</label><br />
                    <textarea name="suggestion" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <button class="btn btn-default" type="submit" class="col-sm-5 control-label">Submit</label>
                </div>
            </div>
        </form>

    </div>

    <!--============================== contact us end code ===============================-->

    </main>

<?php get_footer(); ?>