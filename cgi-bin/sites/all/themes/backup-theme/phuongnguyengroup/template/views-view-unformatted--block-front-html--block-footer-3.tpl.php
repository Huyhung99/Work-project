<div class="footer-info">
    <ul class="list-unstyled">
        <?php $a=0;?>
      <?php foreach ($rows as $id => $row): ?>
        <?php $a++;?>
        <li class="views-row views-row-<?php print $a?> ">
            <?php print $row; ?>
        </li>
      <?php endforeach; ?>
      <?php $a++;?>
<!--        <li class="views-row views-row---><?php //print $a?><!-- ">-->
<!--            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12540.958880556569!2d106.72435474188704!3d20.8539296941137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf383390c3cc6cab6!2zxJDhuqFpIGzDvSBYZSBUaGFjbyBUcuG7jW5nIFRoaeG7h24gSOG6o2kgUGjDsm5n!5e0!3m2!1svi!2s!4v1605146680843!5m2!1svi!2s" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
<!--        </li>-->
    </ul>
</div>