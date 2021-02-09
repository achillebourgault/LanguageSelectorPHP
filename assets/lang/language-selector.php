<form>
    <div class="form">
        <div class="form-group col-md-2 language-selector">
          <select id="inputLanguage" class="form-control" onchange="changeLanguage(<?php echo('\'' . $user_current_language . '\''); ?>)">
            <option selected><?php echo($lang['language']); ?></option>
            <?php
              foreach($languages_availible as &$value) {
              var_dump($value);
                if ($value != $lang['language']) {
                  echo '<option>' . $value . '</option>';
                }
              }
            ?>
          </select>
        </div>
    </div>
</form>