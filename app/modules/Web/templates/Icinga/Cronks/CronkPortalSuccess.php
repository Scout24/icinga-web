<?php 
	$htmlid = $rd->getParameter('htmlid');
?>
<div id="<?php echo $htmlid; ?>">

</div>
<script type="text/javascript">

Ext.onReady(function(){

Ext.BLANK_IMAGE_URL = '/images/ajax/s.gif';

var tabPanel = new Ext.TabPanel({
	autoHeight: true,
	autoScroll: true,

	border: false,
	id: 'cronk-tabs',
	
	// Here comes the drop zone
	listeners: {
		render: initTabPanelDropZone
	}
});

function initTabPanelDropZone(t) {
	new Ext.dd.DropTarget(t.header, {
					ddGroup: 'cronk',
					
					notifyDrop: function(dd, e, data){
						
						var id = AppKit.genRandomId('cronk-');
						
						var params = {
							'p[htmlid]': id
						};
					
						if (data.dragData.parameter) {
							for (var k in data.dragData.parameter) {
								params['p[' + k + ']'] = data.dragData.parameter[k];
							}
						}
						
						tabPanel.add({
							title: data.dragData.name,
							closable: true,
							autoHeight: true,
							id: id,
							autoLoad: { 
								url: "<?php echo $ro->gen('icinga.cronks.crloader', array('cronk' => null)); ?>" + data.dragData.id,
								scripts: true,
								params: params,
							}
						});
						
						tabPanel.setActiveTab(tabPanel.items.length-1);
						tabPanel.doLayout();
					}
	});

}


tabPanel.add({
	autoLoad: { url: "<?php echo $ro->gen('icinga.cronks.crloader', array('cronk' => 'portalHello')); ?>" },
	title: 'Welcome'
});

var cronk_list_id = AppKit.genRandomId('cronk-');

var container = new Ext.Panel({
	layout: 'border',
	border: false,
	monitorResize: true,
	height: 600,
	
	id: 'cronk-container', // OUT CENTER COMPONENT!!!!!
	
	items: [{
		region: 'center',
		title: 'MyView',
        margins: '0 0 0 5',
        items: tabPanel,
        id: 'center-frame'
	}, {
		region: 'west',
		title: 'Misc',
        split: true,
        minSize: 200,
        maxSize: 400,
        width: 200,
        collapsible: true,
        margins: '0 0 0 5',
        
        layout: {
        	type: 'accordion',
            animate: true
        },

        defaults: {
			border: false
        },
        
        items: [{
            title: 'Navigation'
        }, {
            title: 'Settings',
            html: 'Some settings in here.'
        }, {
            title: 'Cronks',
            id: cronk_list_id,
            autoLoad: {
            	url: '<?php echo $ro->gen('icinga.cronks.crloader', array('cronk' => 'crlist')); ?>',
            	scripts: true,
            	params: { 'p[htmlid]': cronk_list_id }
        	}
        }]

	}]
});

container.render("<?php echo $htmlid; ?>");

tabPanel.setActiveTab(0);
tabPanel.doLayout();

container.doLayout();

});
</script>