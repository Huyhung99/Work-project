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

<div class="webform-confirmation">
    <p>Cảm ơn bạn đã đăng ký tư vấn về Sức khỏe và Làm đẹp tới trung tâm CSSK tự nhiên Diện Phúc.</p>
    <p>Chúng tôi sẽ phản hồi lại với bạn tối đa sau 24h. </p>
    <p>Nếu cần hỗ trợ ngay vui lòng liên hệ số Hotline: <a href="tel:0898997369">0898.997.369</a> - <a href="tel:0362660968">036.2660.968</a></p>
    <p>Trân trọng! </p>
</div>

<div class="links">
    <a href="<?php print url('dang-ky-khoa-hoc') ?>"><?php print t('Quay lại đăng ký khóa học') ?></a>
</div>