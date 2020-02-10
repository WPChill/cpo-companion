(function() {
  tinymce.PluginManager.add( 'ctsc_shortcodes', function( editor, url ) {
    editor.addButton( 'ctsc_shortcodes_button', {
      title: 'CPO Shortcodes',
      type: 'menubutton',
      icon: 'icon ctsc-shortcodes-icon',
      menu: [
        {
          text: 'Design Elements',
          menu: [
            {
              text: 'Button',
              onclick: function() {
                editor.selection.setContent( '[button color="red" url="https://www.url.com" size="medium"]' + editor.selection.getContent() + '[/button]' );
              }
            },

            {
              text: 'Button',
              onclick: function() {
                editor.windowManager.open( {
                  title: 'Create Button',
                  body: [
                    { type: 'textbox', name: 'buttonText', label: 'Button: Text', value: 'Download' },

                    // Button URL
                    {
                      type: 'textbox',
                      name: 'buttonUrl',
                      label: 'Button: URL',
                      value: 'https://cpothemes.com/'
                    },

                    // Button Border Radius
                    {
                      type: 'textbox',
                      name: 'buttonBorderRadius',
                      label: 'Button: Border Radius',
                      value: '3px'
                    },

                    // Button Color
                    {
                      type: 'listbox', name: 'buttonColor', label: 'Button: Color',
                      'values': [
                        { text: 'Black', value: 'black' },
                        { text: 'Blue', value: 'blue' },
                        { text: 'Brown', value: 'brown' },
                        { text: 'Grey', value: 'grey' },
                        { text: 'Green', value: 'green' },
                        { text: 'Gold', value: 'gold' },
                        { text: 'Orange', value: 'orange' },
                        { text: 'Pink', value: 'pink' },
                        { text: 'Red', value: 'red' },
                        { text: 'Rosy', value: 'rosy' },
                        { text: 'Teal', value: 'teal' }
                      ]
                    },
                    {
                      type: 'listbox',
                      name: 'buttonSize',
                      label: 'Button: Size',
                      'values': [
                        { text: 'Default', value: 'default' },
                        { text: 'Small', value: 'small' },
                        { text: 'Medium', value: 'medium' },
                        { text: 'Large', value: 'large' }
                      ]
                    },
                    {
                      type: 'listbox',
                      name: 'buttonLinkTarget',
                      label: 'Button: Link Target',
                      'values': [
                        { text: 'Self', value: 'self' },
                        { text: 'Blank', value: 'blank' }
                      ]
                    },

                    // Button Rel
                    {
                      type: 'listbox',
                      name: 'buttonRel',
                      label: 'Button: Rel',
                      'values': [
                        { text: 'None', value: '' },
                        { text: 'Nofollow', value: 'nofollow' }
                      ]
                    },

                    // Button Left Icon
                    {
                      type: 'textbox',
                      name: 'buttonLeftIcon',
                      label: 'Button: Left Icon (FontAwesome Class Name)',
                      value: ''
                    },

                    // Button Right Icon
                    {
                      type: 'textbox',
                      name: 'buttonRightIcon',
                      label: 'Button: Right Icon (FontAwesome Class Name)',
                      value: ''
                    } ],
                  onsubmit: function( e ) {
                    editor.selection.insertContent(
                        '[button url="' + e.data.buttonUrl + '" color="' + e.data.buttonColor + '" size="' + e.data.buttonSize + '" border_radius="' + e.data.buttonBorderRadius +
                        '" target="' + e.data.buttonLinkTarget + '" rel="' + e.data.buttonRel + '" icon_left="' + e.data.buttonLeftIcon + '" icon_right="' +
                        e.data.buttonRightIcon + '"]' + e.data.buttonText + '[/symple_button]' );
                  }
                } );
              }
            },

            {
              text: 'Notice', onclick: function() {
              editor.selection.setContent( '[notice]' + editor.selection.getContent() + '[/notice]' );
            }
            },
            {
              text: 'Message', onclick: function() {
              editor.selection.setContent( '[message type="info"]' + editor.selection.getContent() + '[/message]' );
            }
            },
            {
              text: 'Progress', onclick: function() {
              editor.selection.setContent( '[progress color="red" icon="" size="" value="" title="Progress Bar"]' );
            }
            },
            {
              text: 'Mini Feature', onclick: function() {
              editor.selection.setContent( '[feature icon="flag" style="horizontal" title="Title"]' + editor.selection.getContent() + '[/feature]' );
            }
            },
            {
              text: 'Team Member', onclick: function() {
              editor.selection.setContent(
                  '[team image="" name="Member Name" title="Job Title" web="" facebook="" twitter="" gplus=""]' + editor.selection.getContent() + '[/team]' );
            }
            },
            {
              text: 'Testimonial', onclick: function() {
              editor.selection.setContent( '[testimonial image="" name="Testimonial Name" title="Job Title"]' + editor.selection.getContent() + '[/testimonial]' );
            }
            },
            {
              text: 'Counter', onclick: function() {
              editor.selection.setContent( '[counter icon="ok" Title="Counter Title" number="999"]' + editor.selection.getContent() + '[/counter]' );
            }
            }
          ]
        }, {
          text: 'Interactive',
          menu: [
            {
              text: 'Accordion', onclick: function() {
              editor.selection.setContent( '[accordion title="Title" state="open"]' + editor.selection.getContent() + '[/accordion]' );
            }
            },
            {
              text: 'Tabbed Content', onclick: function() {
              editor.selection.setContent( '[tabs][tab title="Title"]' + editor.selection.getContent() + '[/tab][/tabs]' );
            }
            },
            {
              text: 'Slideshow', onclick: function() {
              editor.selection.setContent( '[slideshow][slide]' + editor.selection.getContent() + '[/slide][/slideshow]' );
            }
            },
            {
              text: 'Map', onclick: function() {
              editor.selection.setContent( '[map latitude="" longitude="" color="" height="400"]' );
            }
            },
            {
              text: 'Pricing Table', onclick: function() {
              editor.selection.setContent( '[pricing_table][pricing_item title="Title" price="100" coin="$" url="" urltitle="Read More"]' + editor.selection.getContent() +
                  '[/pricing_item][/pricing_table]' );
            }
            }
          ]
        }, {
          text: 'Content',
          menu: [
            {
              text: 'Dropcap', onclick: function() {
              editor.selection.setContent( '[dropcap style="square"]' + editor.selection.getContent() + '[/dropcap]' );
            }
            },
            {
              text: 'Leading', onclick: function() {
              editor.selection.setContent( '[leading]' + editor.selection.getContent() + '[/leading]' );
            }
            },
            {
              text: 'List', onclick: function() {
              editor.selection.setContent( '[list icon="ok" style="round"]' + editor.selection.getContent() + '[/list]' );
            }
            },
            {
              text: 'Post List', onclick: function() {
              editor.selection.setContent( '[posts type="post" number="5" columns="1"]' );
            }
            }
          ]
        }, {
          text: 'Social',
          menu: [
            {
              text: 'Like Button', onclick: function() {
              editor.selection.setContent( '[fb_like url="" style="standard" font="arial" action="like" width="450" height="30" position="none"]' );
            }
            },
            {
              text: 'Tweet Button', onclick: function() {
              editor.selection.setContent( '[tweet url="" style="none" font="arial" action="like" width="450" height="30" position="none"]' );
            }
            },
            {
              text: '+1 Button', onclick: function() {
              editor.selection.setContent( '[gplus counter="" style="" width="450" height="30" position="none"]' );
            }
            }
          ]
        }, {
          text: 'Layout',
          menu: [
            {
              text: 'Two Columns', onclick: function() {
              editor.selection.setContent( '[column_half]<br><br>Column<br><br>[/column_half][column_half_last]<br><br>Column<br><br>[/column_half_last]' );
            }
            },
            {
              text: 'Three Columns', onclick: function() {
              editor.selection.setContent(
                  '[column_third]<br><br>Column<br><br>[/column_third][column_third]<br><br>Column<br><br>[/column_third][column_third_last]<br><br>Column<br><br>[/column_third_last]' );
            }
            },
            {
              text: 'Four Columns', onclick: function() {
              editor.selection.setContent(
                  '[column_fourth]<br><br>Column<br><br>[/column_fourth][column_fourth]<br><br>Column<br><br>[/column_fourth][column_fourth]<br><br>Column<br><br>[/column_fourth][column_fourth_last]<br><br>Column<br><br>[/column_fourth_last]' );
            }
            },
            {
              text: 'Five Columns', onclick: function() {
              editor.selection.setContent(
                  '[column_fifth]<br><br>Column<br><br>[/column_fifth][column_fifth]<br><br>Column<br><br>[/column_fifth][column_fifth]<br><br>Column<br><br>[/column_fifth][column_fifth]<br><br>Column<br><br>[/column_fifth][column_fifth_last]<br><br>Column<br><br>[/column_fifth_last]' );
            }
            },
            {
              text: 'Separator', onclick: function() {
              editor.selection.setContent( '[separator type="top"]' + editor.selection.getContent() + '[/separator]' );
            }
            },
            {
              text: 'Section', onclick: function() {
              editor.selection.setContent( '[section background="#666666" color="dark"]' + editor.selection.getContent() + '[/section]' );
            }
            }
          ]
        }

      ]
    } );
  } );
})();
