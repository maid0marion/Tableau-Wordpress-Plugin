/**
 * $Id: editor_plugin_src.js  2012-04-29 maid0marion $
 *
 * @author maid0marion
 */	
(function() {
    tinymce.create('tinymce.plugins.TableauPlugin', {
        init : function(ed, url) {
            ed.addButton('tableau', {
                title : 'Embed Tableau Server Viz',
				cmd : 'mceTableau',
                image : url+'/img/tableau.png',
				onclick : function() {
					var server = 'public.tableausoftware.com';
					var workbook = 'IAPre-conf';
					var view = 'PreConf-Dash-blog';
					var embed = 'yes';
					var width='100%';
					var height='100%';
					ed.execCommand( 'mceInsertContent', false, '\n[tableau server="'+server+'" workbook="'+workbook+'" view="'+view+'" embed="'+embed+'" width="'+width+'" height="'+height+'"][/tableau]\n' );
				}
            });
        },
        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            return {
                longname : "Tableau",
                author : 'Julie Repass',
                authorurl : '',
                infourl : '',
                version : "1.0"
            };
        }
    });
    tinymce.PluginManager.add('tableau', tinymce.plugins.TableauPlugin);
})();