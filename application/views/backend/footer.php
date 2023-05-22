<div id="footer">
    <div id="footer-content" class="col-12 col-sm-8">
        
        <a href="https://easyappointments.org">
          
        </a>

        <?= config('') ?>
        <?php if (config('release_label')): ?>
            - <?= config('release_label') ?>
        <?php endif ?>

       

        
        <a href="https://alextselegidis.com">
            
        </a>
        

       

        <?= lang('') ?>
        <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">
            
        </a>

       

       

        

        <a href="<?= site_url('appointments') ?>">
            <?= lang('go_to_booking_page') ?>
        </a>
    </div>

    <div id="footer-user-display-name" class="col-12 col-sm-4">
        <?= lang('hello') . ', ' . $user_display_name ?>!
    </div>
</div>

<script src="<?= asset_url('assets/js/backend.js') ?>"></script>
<script src="<?= asset_url('assets/js/polyfill.js') ?>"></script>
<script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
</body>
</html>
