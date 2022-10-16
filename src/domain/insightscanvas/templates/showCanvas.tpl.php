<?php
/**
 * Template
 */
defined('RESTRICTED') or die('Restricted access');

$canvasName = 'insights';
?>

<?php require(ROOT.'/../src/domain/canvas/templates/showCanvasTop.inc.php'); ?>

    <?php if(count($this->get('allCanvas')) > 0) { ?>

        <div id="sortableCanvasKanban" class="sortableTicketList disabled">

            <div class="row" style="margin-left: 0px; margin-right: 0px" id="firstRow">
			    <?php foreach($canvasTypes as $key => $box) { ?>
                    <div class="column" style="width:20%">
				        <h4 class="widgettitle title-primary center"><i class="fas <?=$box['icon'] ?>"></i> <?=$box['title'] ?></h4>
                        <?php $elementName = $key; require(ROOT.'/../src/domain/canvas/templates/element.inc.php'); ?>
                    </div>
				<?php } ?>
            </div>

        </div>
        <div class="clearfix"></div>
    <?php } ?>

<?php require(ROOT.'/../src/domain/canvas/templates/showCanvasBottom.inc.php'); ?>
