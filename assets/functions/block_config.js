/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

const {
  RichText,
  AlignmentToolbar,
  BlockControls,
  BlockAlignmentToolbar,
  InspectorControls,
} = wp.editor;
const {
  Toolbar,
  TextControl,
  Button,
  Tooltip,
  PanelBody,
  PanelRow,
  FormToggle,
} = wp.components;


var el = wp.element.createElement;
// var RichText = wp.editor.RichText;
var Fragment = wp.element.Fragment;
// var Inspector = wp.editor.InspectorControls;

wp.blocks.registerBlockType('brett/code', {
    title: 'Brett Code',
    description: "This is the block that will help with displaying code and loading it faster than my old method",
    icon: 'editor-code',
    category: 'common',
    attributes: {
      lang: {type: "string"},
      content: {type: 'string'}//,
    //   color: {type: 'string'}
    },
    
    
  /* This configures how the content and color fields will work, and sets up the necessary elements */
    
    edit: function(props) {
      return (
        <InspectorControls>
          <PanelBody title={__("Gen")}>
            <PanelRow>

            </PanelRow>
          </PanelBody>
        </InspectorControls>
      );
      // function updateLang(event) {
      //   props.setAttributes({lang: event.target.value})
      // }  
      // function updateContent(event) {
      //   props.setAttributes({content: event.target.value})
      // }
      // return el(
      //   Fragment,
      //   {style:null},
      //   // el("label",{style: {color: "#555"}},"Coding Language: "),
      //   // el("input",
      //   //   {
      //   //     type:"",
      //   //     style: {
      //   //       padding: "10px",
      //   //       margin: "10px",
      //   //     },
      //   //     // placeholder: "Coding Language..",
      //   //     value: props.attributes.lang,
      //   //     onChange: function(newLang) {
      //   //       props.setAttributes({lang:newLang});
      //   //     }
      //   //   }
      //   // ),
      //   // el(RichText,
      //   //   {
      //   //     tagName: "h4",
      //   //     // className: props.className,
      //   //     value: props.attributes.lang,
      //   //     style: {
      //   //       padding: "10px",
      //   //       // borderBottom: "1px solid #555",
      //   //       // border: "1px solid #555",
      //   //       // borderRadius: "5px"
      //   //     },
      //   //     multiline: "",
      //   //     onChange: function( newLang ) {
      //   //       props.setAttributes({lang: newLang });
      //   //     }
      //   // }),
      //   // el("label",{style: {color: "#555"}},"Code:"),
      //   el(RichText,
      //     {
      //       tagName: "pre",
      //       // className: props.className,
      //       value: props.attributes.content,
      //       style: {
      //         border: "1px solid #aaa",
      //         borderRadius: "5px",
      //         padding: '20px',
      //         listStyle: "none",
      //         color: "#888"
      //       },
      //       onChange: function( newContent ) {
      //         props.setAttributes({content: newContent});
      //       },
      //       multiline:"li",
      //       placeholder: "Code..",
      //       formattingControls: [null],
      //       keepPlaceholderOnFocus: false,
      //     }
      //   ),
      //   el(InspectorControls,
      //     {key:'controls'},
      //     el(
      //       PanelBody,
      //       {
      //         title: wp.i18n.__("General Settings"),
      //         FormToggle: [
      //         {
      //           label: wp.i18n.__("Coding Language"),
      //           checked: function(style) {
      //             props.setAttributes({styles:style});
      //           },
      //           onChange: function( newCode ) {
      //             props.setAttributes({lang:newCode});
      //           }
      //           // options: [
      //           //   {value: 'html', label: "HTML"},
      //           //   {value: 'html', label: "HTML"},
      //           // ],
      //           // value: props.attributes.lang,
      //         }]
      //         // FormToggle: [{
      //         //   label: wp.i18n.__("asdasd",'brett-code'),
      //         // }]
      //       }
      //     )  
      //   )
      //   // el(Inspector,
      //   //   null,
      //   //   el(
      //   //     wp.editor.BlockControls,
      //   //     {
      //   //       title: wp.i18n.__('General Settings', 'brett-code'),

      //   //       // colorSettings: [
      //   //       //   {
      //   //       //     label: wp.i18n.__("Background Color", "brett-code"),
      //   //       //     value: props.attributes.backgroundColor,
      //   //       //     onChange: function( newBackgroundColor ) {
      //   //       //       props.setAttributes({backgroundColor: newBackgroundColor});
      //   //       //     }
      //   //       //   }
      //   //       // ]
      //   //     }
      //   //   )
      //   // ),
      // );
    },
    save: function(props) {
      return el(
        "pre",
        // { border: "3px solid " + props.attributes.color }
        { style:  null},
        // el(
        //   RichText.Content,
        //   {
        //     tagName: "h4",
        //     className: props.attributes.className,
        //     value: props.attributes.lang,
        //     style: null,
        //     multiline: "null",
        //   }
        // ),
        el("label",null,props.attributes.lang),
        el(RichText.Content,
          {
            tagName: "ul",
            className: props.attributes.className,
            value: props.attributes.content,
            style: {
              listStyle: "none",
              backgroundColor: "grey",
            },
            multiline:"li",
          }),
        // props.attributes.content
        // el(RichText,null,props.attributes.content),
      );
    }
  })