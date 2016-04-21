<?php
defined('_JEXEC') or die('Restricted access');
$upper_limit     = $lang->getUpperLimitSearchWord();
$maxlength       = $upper_limit;
$text            = htmlspecialchars(JText::_('نام استاد را وارد کنید'));
$label           = htmlspecialchars(JText::_('MOD_SEARCH_LABEL_TEXT'));
JHtml::stylesheet(JURI::root().'components/com_helloworld/css/style.css');
JHtml::stylesheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
JHtml::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
JHtml::stylesheet('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
?>

<!-- forme searchs -->

    <form action="<?php echo JRoute::_('index.php?option=com_helloworld&view=search');?>" method="post" class="form-horizontal">
    <div class="form-group col-sm-12 right">
         <input name="searchword" id="mod-search-searchword" maxlength="65" class="col-sm-5 right" type="search" placeholder="<?php echo $text; ?>" />

        <select class="col-sm-2 right cap input-lg" name='term'>
        <option value="">انتخاب ترم تحصیلی</option>
                     <?php foreach($this->terms as $i => $items) { ?>
                      <option value="<?php echo $items->id;  ?>"><?php echo $items->name;  ?></option>
                      <?php } ?>
            </select>

             <select class="col-sm-2 right cap input-lg" name="book">
             <option value="">انتخاب کتاب</option>
                       <?php foreach($this->books as $i => $item) { ?>
                      <option value="<?php echo $item->id;  ?>"><?php echo $item->name;  ?></option>
                      <?php } ?>
                  </select>
          <div class="clearfix"></div>
          <input type="submit" name="submit" value="جستجو" class="btn btn-primary btn-lg right" />
      </div>
          </form>
                                                                        <!---  seraches ------>
                                                                        <div class="clearfix"></div>

                                                                        	<?php if (($this->output) != null) { 
		echo $this->output;
	}else {
		echo "<p class='erse bg-danger'><i class='fa fa-bell-slash-o' aria-hidden='true'></i> جستجویی وجود ندارد !!</p>";
	} ?>