<?php
use Destiny\Common\Utils\Tpl;
use Destiny\Common\Utils\Date;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?=Tpl::title($this->title)?>
    <?php include 'seg/meta.php' ?>
    <?=Tpl::manifestLink('web.css')?>
</head>
<body id="admin" class="no-contain">
<div id="page-wrap">

    <?php include 'seg/nav.php' ?>
    <?php include 'seg/alerts.contained.php' ?>
    <?php include 'seg/admin.nav.php' ?>

    <section class="container">
        <h3 class="in" data-toggle="collapse" data-target="#broadcast-content">Broadcast</h3>
        <div id="broadcast-content" class="content content-dark collapse show">
            <form class="form" action="/admin/chat/broadcast" role="form">
                <div class="ds-block">
                    <div class="form-group">
                        <label>Message:
                            <br /><small>Send a broadcast message to the chat immediately</small>
                        </label>
                        <input name="message" type="text" class="form-control" value="" placeholder="Please no pasterino..." />
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </section>

    <section class="container">
        <h3 class="in" data-toggle="collapse" data-target="#search-content">Search</h3>
        <div id="search-content" class="content content-dark collapse show">
            <form class="form-search" action="/admin/chat/ip">
                <div class="ds-block">
                    <div class="form-group">
                        <label>IP Address:
                            <br /><small>Search for users by an IP address</small>
                        </label>
                        <input name="ip" type="text" class="form-control" value="<?=Tpl::out($this->searchIp)?>" placeholder="192.168.0.1" />
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </section>

    <?php if(!empty($this->searchIp)): ?>
        <section class="container">
            <div class="content content-dark clearfix">
                <?php if(!empty($this->usersByIp)): ?>
                    <table class="grid">
                        <thead>
                        <tr>
                            <td>Username</td>
                            <td>Created</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($this->usersByIp as $user): ?>
                            <tr>
                                <td><a href="/admin/user/<?=$user['userId']?>/edit"><?=Tpl::out($user['username'])?></a></td>
                                <td><?=Tpl::moment(Date::getDateTime($user['createdDate']), Date::STRING_FORMAT_YEAR)?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="ds-block">
                        <p>No users with the IP "<?=Tpl::out($this->searchIp)?>"</p>
                    </div>
                <?php endif ?>
            </div>
        </section>
    <?php endif ?>
</div>

<?php include 'seg/foot.php' ?>
<?php include 'seg/tracker.php' ?>
<?=Tpl::manifestScript('runtime.js')?>
<?=Tpl::manifestScript('common.vendor.js')?>
<?=Tpl::manifestScript('web.js')?>
<?=Tpl::manifestScript('admin.js')?>

</body>
</html>