<form id="request-form" name="requestform" role="form" autocomplete="off"  method="POST" novalidate="novalidate">

    <h1 class="form-title"> <?php _e('Engage With an Expert'); ?></h1>
    <p class="subheading"><?php _e('To discuss how our digital marketing agency can help'); ?><br> <?php _e('you convert leads into customers'); ?>.</p>

    <div class="form-group width-50 inline-block first-column">
        <input class="form-control" name="fullName" type="text" id="fullName" value=""  autocomplete="off" spellcheck="false" placeholder="<?php _e('Full Name*'); ?>">
    </div><!--

    --><div class="form-group width-50 inline-block">
        <input class="form-control" name="email" type="text" id="email" value=""  autocomplete="off" spellcheck="false" placeholder="<?php _e('Email*'); ?>">
    </div>

    <div class="form-group width-50 inline-block first-column">
        <input class="form-control" name="phone" type="text" id="phone" value=""  autocomplete="off" spellcheck="false" placeholder="<?php _e('Phone Number'); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
    </div><!--

    --><div class="form-group width-50 inline-block">
        <input class="form-control" name="website" type="text" id="website" value=""  autocomplete="off" spellcheck="false" placeholder="<?php _e('Website'); ?>">
    </div>

    <div class="form-group">
        <textarea  class="form-control" cols="40" rows="4" name="message" id="message"  maxlength="2000" placeholder="<?php _e('Further Details'); ?>"></textarea>
    </div>

    <div class="button-wrapper">
        <input class="form-button" type="submit" value="<?php _e('Submit Request'); ?>"/>
        <span class="disclaimer"><?php _e('*By registering, you confirm that you agree to the storing and processing of your personal data by Wesrom Digital as described in the Privacy Policy.'); ?></span>
    </div>

</form>
