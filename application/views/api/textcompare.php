<div id="<?php echo $lang_id; ?>" class="code">
    <p class="text-center code-p"><?php echo $lang_name; ?></p>
    <ol class="code-ol">
        <?php foreach ($line_sanskrit as $key_line => $syllableList) { ?>
            <li class="code-li">
                <div>
                    <?php foreach ($syllableList as $key_word => $syllable) { ?>
                        <span id="<?php echo $lang_id . '-' . $key_line . '-' . $key_word ?>" class="syllable"><?php echo $syllable; ?></span>
                    <?php } ?>
                </div>
            </li>
        <?php } ?>
    </ol>
</div>