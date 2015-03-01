<header class="container-fluid" id="header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php if ($page['menu']): ?>
                    <?php print render($page['menu']); ?>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-sm-12" id="logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        </div>
        <div class="col-sm-12" id="naam">Restaurant PR*JCT</div>
        <div class="col-sm-12 naaronder">
            <a href="#typo">
                <span class="glyphicon glyphicon-menu-down hidden-xs"></span>
            </a>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <?php if ($page['zijbalk']): ?>
        <div class="col-sm-9" id="inhoud">
        <?php else: ?>
        <div class="col-sm-12" id="inhoud">
            <?php endif; ?>

            <?php // print $breadcrumb; ?>
            <a id="main-content"></a>
            <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>           <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>           <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>           <?php print render($tabs2); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links">
                <?php print render($action_links); ?></ul>
            <?php endif; ?>
            <div class="clearfix">
                <?php print render($page['content']); ?></div>
        </div><!-- end inhoud -->

        <?php if ($page['zijbalk']): ?>
            <div class="col-sm-3" id="zijbalk">
                    <?php print render($page['zijbalk']); ?>
            </div><!-- end zijbalk -->
        <?php endif; ?>

    </div>
</div>
<footer class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.be/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Meir,+Antwerpen&amp;aq=0&amp;oq=Antwerpen+mier&amp;sll=51.219448,4.402464&amp;sspn=0.318683,0.837021&amp;ie=UTF8&amp;hq=&amp;hnear=Meir,+Antwerpen+2000+Antwerpen&amp;ll=51.2181,4.408818&amp;spn=0.039841,0.104628&amp;t=m&amp;z=14&amp;output=embed"></iframe>
            <br/>
            <small>
                <a href="https://maps.google.be/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=Meir,+Antwerpen&amp;aq=0&amp;oq=Antwerpen+mier&amp;sll=51.219448,4.402464&amp;sspn=0.318683,0.837021&amp;ie=UTF8&amp;hq=&amp;hnear=Meir,+Antwerpen+2000+Antwerpen&amp;ll=51.2181,4.408818&amp;spn=0.039841,0.104628&amp;t=m&amp;z=14"
                   style="color:#0000FF;text-align:left">Grotere kaart weergeven</a></small>
        </div>
        <div class="col-sm-6">
            <?php if ($page['footer']): ?>
                <?php print render($page['footer']); ?>
            <?php endif; ?>
        </div>
    </div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php print base_path() . path_to_theme(); ?>/js/ie10-viewport-bug-workaround.js"></script>
