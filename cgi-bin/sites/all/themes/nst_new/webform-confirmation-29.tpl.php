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
<?php
    global $language;
    if ($language->language == 'vi'){
        $description = 'Cảm ơn bạn đã gửi liên hệ. Chúng tôi sẽ phản hồi lại bạn trong thời gian sớm nhất.';
        $path = '/lien-he';
        $title_path = 'Quay lại trang liên hệ';
    }else{
        $description = 'Thank you for your contact. We will respond to you as soon as possible.';
        $path = '/contact';
        $title_path = 'Back to contact page';
    }
?>
<div class="webform-confirmation"><p><?=$description?></p></div>

<div class="links">
    <a href="<?php print url($path) ?>"><?php print t($title_path) ?></a>
</div>
