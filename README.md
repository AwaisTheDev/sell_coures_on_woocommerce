#Sell courses on woocommerce
This is a Astra child theme which can convert your woocommerce shop and single product pages to look like course selling website. 

All the custom feilds are created Advanced Custom feilds website
You can ceate same cby going to wp-admin > custom feilds > Tools > Import Feild Groups

Copy the code below and save it as JSON file and import that file in Import Feild Groups Section

```JSON
[
    {
        "key": "group_61740142aeb61",
        "title": "Course Data",
        "fields": [
            {
                "key": "field_6174062e420df",
                "label": "Video",
                "name": "video",
                "type": "file",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "",
                    "class": "",
                    "id": ""
                },
                "return_format": "url",
                "library": "all",
                "min_size": "",
                "max_size": "",
                "mime_types": ""
            },
            {
                "key": "field_6174018c7d0c8",
                "label": "Course Content",
                "name": "course_content",
                "type": "wysiwyg",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "",
                    "class": "",
                    "id": ""
                },
                "default_value": "",
                "tabs": "all",
                "toolbar": "basic",
                "media_upload": 1,
                "delay": 0
            },
            {
                "key": "field_617401c57d0c9",
                "label": "Level",
                "name": "level",
                "type": "select",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "33",
                    "class": "",
                    "id": ""
                },
                "choices": {
                    "All Levels": "All Levels",
                    "Beginner": "Beginner",
                    "Intermediate": "Intermediate",
                    "Advanced": "Advanced"
                },
                "default_value": false,
                "allow_null": 0,
                "multiple": 0,
                "ui": 0,
                "return_format": "value",
                "ajax": 0,
                "placeholder": ""
            },
            {
                "key": "field_617402647d0ca",
                "label": "Duration",
                "name": "duration",
                "type": "text",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "33",
                    "class": "",
                    "id": ""
                },
                "default_value": "",
                "placeholder": "",
                "prepend": "",
                "append": "",
                "maxlength": ""
            },
            {
                "key": "field_617402cd7d0cb",
                "label": "Videos",
                "name": "videos",
                "type": "text",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "33",
                    "class": "",
                    "id": ""
                },
                "default_value": "",
                "placeholder": "",
                "prepend": "",
                "append": "",
                "maxlength": ""
            },
            {
                "key": "field_617402dc7d0cc",
                "label": "Downloadable Files",
                "name": "downloadable_files",
                "type": "text",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "33",
                    "class": "",
                    "id": ""
                },
                "default_value": "",
                "placeholder": "",
                "prepend": "",
                "append": "",
                "maxlength": ""
            },
            {
                "key": "field_617402e67d0cd",
                "label": "Access",
                "name": "access",
                "type": "text",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "33",
                    "class": "",
                    "id": ""
                },
                "default_value": "Lifetime Access",
                "placeholder": "Lifetime Access",
                "prepend": "",
                "append": "",
                "maxlength": ""
            },
            {
                "key": "field_6174030f7d0ce",
                "label": "Devices Access",
                "name": "devices_access",
                "type": "text",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "33",
                    "class": "",
                    "id": ""
                },
                "default_value": "Access from any computer, tablet or mobile",
                "placeholder": "Access from any computer, tablet or mobile",
                "prepend": "",
                "append": "",
                "maxlength": ""
            },
            {
                "key": "field_617404e008bc0",
                "label": "Reviews",
                "name": "reviews",
                "type": "repeater",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "",
                    "class": "",
                    "id": ""
                },
                "collapsed": "",
                "min": 0,
                "max": 0,
                "layout": "table",
                "button_label": "Add Review",
                "sub_fields": [
                    {
                        "key": "field_617404f408bc1",
                        "label": "Title",
                        "name": "title",
                        "type": "text",
                        "instructions": "",
                        "required": 0,
                        "conditional_logic": 0,
                        "wrapper": {
                            "width": "",
                            "class": "",
                            "id": ""
                        },
                        "default_value": "",
                        "placeholder": "",
                        "prepend": "",
                        "append": "",
                        "maxlength": ""
                    },
                    {
                        "key": "field_6174050708bc2",
                        "label": "Testimonial",
                        "name": "testimonial",
                        "type": "textarea",
                        "instructions": "",
                        "required": 0,
                        "conditional_logic": 0,
                        "wrapper": {
                            "width": "",
                            "class": "",
                            "id": ""
                        },
                        "default_value": "",
                        "placeholder": "",
                        "maxlength": "",
                        "rows": "",
                        "new_lines": ""
                    },
                    {
                        "key": "field_6174051408bc3",
                        "label": "Image",
                        "name": "image",
                        "type": "image",
                        "instructions": "",
                        "required": 0,
                        "conditional_logic": 0,
                        "wrapper": {
                            "width": "",
                            "class": "",
                            "id": ""
                        },
                        "return_format": "url",
                        "preview_size": "medium",
                        "library": "all",
                        "min_width": "",
                        "min_height": "",
                        "min_size": "",
                        "max_width": "",
                        "max_height": "",
                        "max_size": "",
                        "mime_types": ""
                    },
                    {
                        "key": "field_6174053d08bc4",
                        "label": "Name",
                        "name": "name",
                        "type": "text",
                        "instructions": "",
                        "required": 0,
                        "conditional_logic": 0,
                        "wrapper": {
                            "width": "",
                            "class": "",
                            "id": ""
                        },
                        "default_value": "",
                        "placeholder": "",
                        "prepend": "",
                        "append": "",
                        "maxlength": ""
                    },
                    {
                        "key": "field_6174054508bc5",
                        "label": "Designation",
                        "name": "designation",
                        "type": "text",
                        "instructions": "",
                        "required": 0,
                        "conditional_logic": 0,
                        "wrapper": {
                            "width": "",
                            "class": "",
                            "id": ""
                        },
                        "default_value": "",
                        "placeholder": "",
                        "prepend": "",
                        "append": "",
                        "maxlength": ""
                    }
                ]
            }
        ],
        "location": [
            [
                {
                    "param": "post_type",
                    "operator": "==",
                    "value": "product"
                }
            ]
        ],
        "menu_order": 0,
        "position": "normal",
        "style": "default",
        "label_placement": "top",
        "instruction_placement": "label",
        "hide_on_screen": "",
        "active": true,
        "description": ""
    }
]

```

