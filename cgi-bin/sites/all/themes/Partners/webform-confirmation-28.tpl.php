<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>
<?php global $language;?>
<?php
    if ($language->language == "vi"){
        $path = '/vi/lien-he';
        $body = "Cảm ơn, Chúng tôi sẽ phản hồi lại sớm nhất.";
        $back = "Quay lại liên hệ";
    }else if ($language->language == "en"){
        $path = '/en/contact-us';
        $body = "Thank you, your submission has been received.";
        $back = "Go back to the form";
    }
?>
<div class="webform-confirmation"><p><?=$body?></p></div>

<div class="links">
    <a href="<?php print url($path) ?>"><?php print $back ?></a>
</div>
