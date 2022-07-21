                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <script src="<?php echo base_url() ?>/assets/js/go.js"></script>

                            <div id="allSampleContent" class="p-4 w-full">
                                <script id="code">
                                    function init() {
                                        if (window.goSamples) goSamples(); // init for these samples -- you don't need to call this

                                        // Since 2.2 you can also author concise templates with method chaining instead of GraphObject.make
                                        // For details, see https://gojs.net/latest/intro/buildingObjects.html
                                        const $ = go.GraphObject.make; // for conciseness in defining templates

                                        myDiagram =
                                            $(go.Diagram, "myDiagramDiv", // must name or refer to the DIV HTML element
                                                {
                                                    "LinkDrawn": showLinkLabel, // this DiagramEvent listener is defined below
                                                    "LinkRelinked": showLinkLabel,
                                                    "undoManager.isEnabled": true // enable undo & redo
                                                });

                                        // when the document is modified, add a "*" to the title and enable the "Save" button
                                        myDiagram.addDiagramListener("Modified", e => {
                                            var button = document.getElementById("SaveButton");
                                            if (button) button.disabled = !myDiagram.isModified;
                                            var idx = document.title.indexOf("*");
                                            if (myDiagram.isModified) {
                                                if (idx < 0) document.title += "*";
                                            } else {
                                                if (idx >= 0) document.title = document.title.slice(0, idx);
                                            }
                                        });

                                        // helper definitions for node templates

                                        function nodeStyle() {
                                            return [
                                                // The Node.location comes from the "loc" property of the node data,
                                                // converted by the Point.parse static method.
                                                // If the Node.location is changed, it updates the "loc" property of the node data,
                                                // converting back using the Point.stringify static method.
                                                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                                                {
                                                    // the Node.location is at the center of each node
                                                    locationSpot: go.Spot.Center
                                                }
                                            ];
                                        }

                                        // Define a function for creating a "port" that is normally transparent.
                                        // The "name" is used as the GraphObject.portId,
                                        // the "align" is used to determine where to position the port relative to the body of the node,
                                        // the "spot" is used to control how links connect with the port and whether the port
                                        // stretches along the side of the node,
                                        // and the boolean "output" and "input" arguments control whether the user can draw links from or to the port.
                                        function makePort(name, align, spot, output, input) {
                                            var horizontal = align.equals(go.Spot.Top) || align.equals(go.Spot.Bottom);
                                            // the port is basically just a transparent rectangle that stretches along the side of the node,
                                            // and becomes colored when the mouse passes over it
                                            return $(go.Shape, {
                                                fill: "transparent", // changed to a color in the mouseEnter event handler
                                                strokeWidth: 0, // no stroke
                                                width: horizontal ? NaN : 8, // if not stretching horizontally, just 8 wide
                                                height: !horizontal ? NaN : 8, // if not stretching vertically, just 8 tall
                                                alignment: align, // align the port on the main Shape
                                                stretch: (horizontal ? go.GraphObject.Horizontal : go.GraphObject.Vertical),
                                                portId: name, // declare this object to be a "port"
                                                fromSpot: spot, // declare where links may connect at this port
                                                fromLinkable: output, // declare whether the user may draw links from here
                                                toSpot: spot, // declare where links may connect at this port
                                                toLinkable: input, // declare whether the user may draw links to here
                                                cursor: "pointer", // show a different cursor to indicate potential link point
                                                mouseEnter: (e, port) => { // the PORT argument will be this Shape
                                                    if (!e.diagram.isReadOnly) port.fill = "rgba(255,0,255,0.5)";
                                                },
                                                mouseLeave: (e, port) => port.fill = "transparent"
                                            });
                                        }

                                        function textStyle() {
                                            return {
                                                font: "bold 11pt Lato, Helvetica, Arial, sans-serif",
                                                stroke: "#F8F8F8"
                                            }
                                        }

                                        // define the Node templates for regular nodes

                                        myDiagram.nodeTemplateMap.add("", // the default category
                                            $(go.Node, "Table", nodeStyle(),
                                                // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                                                $(go.Panel, "Auto",
                                                    $(go.Shape, "Rectangle", {
                                                            fill: "#282c34",
                                                            stroke: "#00A9C9",
                                                            strokeWidth: 3.5
                                                        },
                                                        new go.Binding("figure", "figure")),
                                                    $(go.TextBlock, textStyle(), {
                                                            margin: 8,
                                                            maxSize: new go.Size(160, NaN),
                                                            wrap: go.TextBlock.WrapFit,
                                                            editable: true
                                                        },
                                                        new go.Binding("text").makeTwoWay())
                                                ),
                                                // four named ports, one on each side:
                                                makePort("T", go.Spot.Top, go.Spot.TopSide, false, true),
                                                makePort("L", go.Spot.Left, go.Spot.LeftSide, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.RightSide, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.BottomSide, true, false)
                                            ));

                                        myDiagram.nodeTemplateMap.add("Conditional",
                                            $(go.Node, "Table", nodeStyle(),
                                                // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                                                $(go.Panel, "Auto",
                                                    $(go.Shape, "Diamond", {
                                                            fill: "#282c34",
                                                            stroke: "#00A9C9",
                                                            strokeWidth: 3.5
                                                        },
                                                        new go.Binding("figure", "figure")),
                                                    $(go.TextBlock, textStyle(), {
                                                            margin: 8,
                                                            maxSize: new go.Size(160, NaN),
                                                            wrap: go.TextBlock.WrapFit,
                                                            editable: true
                                                        },
                                                        new go.Binding("text").makeTwoWay()),

                                                ),
                                                // four named ports, one on each side:
                                                makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                                            ));

                                        myDiagram.nodeTemplateMap.add("Start",
                                            $(go.Node, "Table", nodeStyle(),
                                                $(go.Panel, "Spot",
                                                    $(go.Shape, "Circle", {
                                                        desiredSize: new go.Size(70, 70),
                                                        fill: "#282c34",
                                                        stroke: "#09d3ac",
                                                        strokeWidth: 3.5
                                                    }),
                                                    $(go.TextBlock, "Start", textStyle(),
                                                        new go.Binding("text"))
                                                ),
                                                // three named ports, one on each side except the top, all output only:
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, false),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, false),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                                            ));

                                        myDiagram.nodeTemplateMap.add("End",
                                            $(go.Node, "Table", nodeStyle(),
                                                $(go.Panel, "Spot",
                                                    $(go.Shape, "Circle", {
                                                        desiredSize: new go.Size(60, 60),
                                                        fill: "#282c34",
                                                        stroke: "#DC3C00",
                                                        strokeWidth: 3.5
                                                    }),
                                                    $(go.TextBlock, "End", textStyle(),
                                                        new go.Binding("text"))
                                                ),
                                                // three named ports, one on each side except the bottom, all input only:
                                                makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, false, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, false, true)
                                            ));

                                        // taken from https://unpkg.com/gojs@2.2.12/extensions/Figures.js:
                                        go.Shape.defineFigureGenerator("File", (shape, w, h) => {
                                            var geo = new go.Geometry();
                                            var fig = new go.PathFigure(0, 0, true); // starting point
                                            geo.add(fig);
                                            fig.add(new go.PathSegment(go.PathSegment.Line, .75 * w, 0));
                                            fig.add(new go.PathSegment(go.PathSegment.Line, w, .25 * h));
                                            fig.add(new go.PathSegment(go.PathSegment.Line, w, h));
                                            fig.add(new go.PathSegment(go.PathSegment.Line, 0, h).close());
                                            var fig2 = new go.PathFigure(.75 * w, 0, false);
                                            geo.add(fig2);
                                            // The Fold
                                            fig2.add(new go.PathSegment(go.PathSegment.Line, .75 * w, .25 * h));
                                            fig2.add(new go.PathSegment(go.PathSegment.Line, w, .25 * h));
                                            geo.spot1 = new go.Spot(0, .25);
                                            geo.spot2 = go.Spot.BottomRight;
                                            return geo;
                                        });

                                        myDiagram.nodeTemplateMap.add("Comment",
                                            $(go.Node, "Auto", nodeStyle(),
                                                $(go.Shape, "File", {
                                                    fill: "#282c34",
                                                    stroke: "#DEE0A3",
                                                    strokeWidth: 3
                                                }),
                                                $(go.TextBlock, textStyle(), {
                                                        margin: 8,
                                                        maxSize: new go.Size(200, NaN),
                                                        wrap: go.TextBlock.WrapFit,
                                                        textAlign: "center",
                                                        editable: true
                                                    },
                                                    new go.Binding("text").makeTwoWay())
                                                // no ports, because no links are allowed to connect with a comment
                                            ));

                                        myDiagram.nodeTemplateMap.add("Conditional1",
                                            $(go.Node, "Table", nodeStyle(),
                                                // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                                                $(go.Panel, "Auto",
                                                    $(go.Shape, "Rectangle", {
                                                            fill: "#787878",
                                                            stroke: "#282c34",
                                                            strokeWidth: 0
                                                        },
                                                        new go.Binding("figure", "figure")),
                                                    $(go.TextBlock, textStyle(), {
                                                            margin: 1,
                                                            wrap: go.TextBlock.WrapFit,
                                                            editable: true
                                                        },
                                                        new go.Binding("text").makeTwoWay())
                                                ),

                                            ));

                                        myDiagram.nodeTemplateMap.add("Conditional2",
                                            $(go.Node, "Table", nodeStyle(),
                                                // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                                                $(go.Panel, "Auto",
                                                    $(go.Shape, "Rectangle", {
                                                            fill: "#282c34",
                                                            stroke: "#fdfe03",
                                                            strokeWidth: 4
                                                        },
                                                        new go.Binding("figure", "figure")),
                                                    $(go.TextBlock, textStyle(), {
                                                            margin: 8,
                                                            maxSize: new go.Size(160, NaN),
                                                            wrap: go.TextBlock.WrapFit,
                                                            editable: true
                                                        },
                                                        new go.Binding("text").makeTwoWay())
                                                ),
                                                // four named ports, one on each side:
                                                makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                                            ));
                                        myDiagram.nodeTemplateMap.add("Danger",
                                            $(go.Node, "Table", nodeStyle(),
                                                // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                                                $(go.Panel, "Auto",
                                                    $(go.Shape, "Rectangle", {
                                                            fill: "#282c34",
                                                            stroke: "#DC3C00",
                                                            strokeWidth: 4
                                                        },
                                                        new go.Binding("figure", "figure")),
                                                    $(go.TextBlock, textStyle(), {
                                                            margin: 8,
                                                            maxSize: new go.Size(160, NaN),
                                                            wrap: go.TextBlock.WrapFit,
                                                            editable: true
                                                        },
                                                        new go.Binding("text").makeTwoWay())
                                                ),
                                                // four named ports, one on each side:
                                                makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                                            ));
                                        myDiagram.nodeTemplateMap.add("Success",
                                            $(go.Node, "Table", nodeStyle(),
                                                // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                                                $(go.Panel, "Auto",
                                                    $(go.Shape, "Rectangle", {
                                                            fill: "#282c34",
                                                            stroke: "#1ae100",
                                                            strokeWidth: 4
                                                        },
                                                        new go.Binding("figure", "figure")),
                                                    $(go.TextBlock, textStyle(), {
                                                            margin: 8,
                                                            maxSize: new go.Size(160, NaN),
                                                            wrap: go.TextBlock.WrapFit,
                                                            editable: true
                                                        },
                                                        new go.Binding("text").makeTwoWay())
                                                ),
                                                // four named ports, one on each side:
                                                makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                                            ));
                                        myDiagram.nodeTemplateMap.add("Router",
                                            $(go.Node, "Auto", nodeStyle(),
                                                $(go.Shape, "Rectangle", {
                                                    fill: "#787878",
                                                    stroke: "#282c34",
                                                    strokeWidth: 0
                                                }),

                                                $(go.Picture, {
                                                        width: 70,
                                                        height: 70
                                                    },
                                                    new go.Binding("source")),
                                                // four named ports, one on each side:
                                                makePort("T", go.Spot.Top, go.Spot.Top, true, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, true)


                                                // no ports, because no links are allowed to connect with a comment
                                            ));
                                        myDiagram.nodeTemplateMap.add("Access",
                                            $(go.Node, "Auto", nodeStyle(),
                                                $(go.Shape, "Rectangle", {
                                                    fill: "#787878",
                                                    stroke: "#282c34",
                                                    strokeWidth: 0
                                                }),

                                                $(go.Picture, {
                                                        margin: 18,
                                                        width: 50,
                                                        height: 50
                                                    },
                                                    new go.Binding("source")),
                                                makePort("T", go.Spot.Top, go.Spot.Top, true, true),
                                                makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                                                makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                                                makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, true)


                                                // no ports, because no links are allowed to connect with a comment
                                            ));


                                        // replace the default Link template in the linkTemplateMap
                                        myDiagram.linkTemplate =
                                            $(go.Link, // the whole link panel
                                                {
                                                    routing: go.Link.AvoidsNodes,
                                                    curve: go.Link.JumpOver,
                                                    corner: 5,
                                                    toShortLength: 4,
                                                    relinkableFrom: true,
                                                    relinkableTo: true,
                                                    reshapable: true,
                                                    resegmentable: true,
                                                    // mouse-overs subtly highlight links:
                                                    mouseEnter: (e, link) => link.findObject("HIGHLIGHT").stroke = "rgba(30,144,255,0.2)",
                                                    mouseLeave: (e, link) => link.findObject("HIGHLIGHT").stroke = "transparent",
                                                    selectionAdorned: false
                                                },
                                                new go.Binding("points").makeTwoWay(),
                                                $(go.Shape, // the highlight shape, normally transparent
                                                    {
                                                        isPanelMain: true,
                                                        strokeWidth: 8,
                                                        stroke: "transparent",
                                                        name: "HIGHLIGHT"
                                                    }),
                                                $(go.Shape, // the link path shape
                                                    {
                                                        isPanelMain: true,
                                                        stroke: "#0F52BA",
                                                        strokeWidth: 2
                                                    },
                                                    new go.Binding("stroke", "isSelected", sel => sel ? "dodgerblue" : "#0F52BA").ofObject()),
                                                $(go.Shape, // the arrowhead
                                                    {
                                                        toArrow: "standard",
                                                        strokeWidth: 0,
                                                        fill: "#0F52BA"
                                                    }),
                                            );

                                        // Make link labels visible if coming out of a "conditional" node.
                                        // This listener is called by the "LinkDrawn" and "LinkRelinked" DiagramEvents.
                                        function showLinkLabel(e) {
                                            var label = e.subject.findObject("LABEL");
                                            if (label !== null) label.visible = (e.subject.fromNode.data.category === "Conditional");
                                        }

                                        // temporary links used by LinkingTool and RelinkingTool are also orthogonal:
                                        myDiagram.toolManager.linkingTool.temporaryLink.routing = go.Link.Orthogonal;
                                        myDiagram.toolManager.relinkingTool.temporaryLink.routing = go.Link.Orthogonal;

                                        load(); // load an initial diagram from some JSON text

                                        // initialize the Palette that is on the left side of the page
                                        myPalette =
                                            $(go.Palette, "myPaletteDiv", // must name or refer to the DIV HTML element
                                                {
                                                    // Instead of the default animation, use a custom fade-down
                                                    "animationManager.initialAnimationStyle": go.AnimationManager.None,
                                                    "InitialAnimationStarting": animateFadeDown, // Instead, animate with this function

                                                    nodeTemplateMap: myDiagram.nodeTemplateMap, // share the templates used by myDiagram
                                                    model: new go.GraphLinksModel([ // specify the contents of the Palette
                                                        {
                                                            category: "Conditional1",
                                                            text: " "
                                                        },
                                                        {
                                                            category: "Router",
                                                            text: "Router",
                                                            source: "<?php echo base_url() ?>/assets/topology/router.svg"
                                                        },
                                                        {
                                                            category: "Router",
                                                            text: "Core Switch",
                                                            source: "<?php echo base_url() ?>/assets/topology/coreswitch.svg"
                                                        },
                                                        {
                                                            category: "Router",
                                                            text: "Unmanage Switch",
                                                            source: "<?php echo base_url() ?>/assets/topology/unswitch.svg"
                                                        },
                                                        {
                                                            category: "Access",
                                                            text: "Access Point",
                                                            source: "<?php echo base_url() ?>/assets/topology/ap.svg"
                                                        },
                                                        {
                                                            category: "Router",
                                                            source: "<?php echo base_url() ?>/assets/topology/logo1.svg"
                                                        },
                                                        {
                                                            category: "Router",
                                                            source: "<?php echo base_url() ?>/assets/topology/logo2.svg"
                                                        },
                                                        {
                                                            category: "Conditional2",
                                                            text: "Edit Text 1"
                                                        },
                                                        {
                                                            category: "Danger",
                                                            text: "Edit Text 2"
                                                        },
                                                        {
                                                            category: "Success",
                                                            text: "Edit Text 3"
                                                        },
                                                        {
                                                            category: "Conditional1",
                                                            text: "Edit Text 4"
                                                        },

                                                    ])
                                                });

                                        // This is a re-implementation of the default animation, except it fades in from downwards, instead of upwards.
                                        function animateFadeDown(e) {
                                            var diagram = e.diagram;
                                            var animation = new go.Animation();
                                            animation.isViewportUnconstrained = true; // So Diagram positioning rules let the animation start off-screen
                                            animation.easing = go.Animation.EaseOutExpo;
                                            animation.duration = 900;
                                            // Fade "down", in other words, fade in from above
                                            animation.add(diagram, 'position', diagram.position.copy().offset(0, 200), diagram.position);
                                            animation.add(diagram, 'opacity', 0, 1);
                                            animation.start();
                                        }
                                        document.getElementById("svgButton").addEventListener("click", makeSvg);

                                    } // end init


                                    // Show the diagram's model in JSON format that the user may edit
                                    function save() {
                                        document.getElementById("mySavedModel").value = myDiagram.model.toJson();
                                        myDiagram.isModified = false;
                                    }

                                    function load() {
                                        myDiagram.model = go.Model.fromJson(document.getElementById("mySavedModel").value);
                                    }

                                    function myCallback(blob) {
                                        var url = window.URL.createObjectURL(blob);
                                        var filename = "mySVGFile.svg";

                                        var a = document.createElement("a");
                                        a.style = "display: none";
                                        a.href = url;
                                        a.download = filename;

                                        // IE 11
                                        if (window.navigator.msSaveBlob !== undefined) {
                                            window.navigator.msSaveBlob(blob, filename);
                                            return;
                                        }

                                        document.body.appendChild(a);
                                        requestAnimationFrame(() => {
                                            a.click();
                                            window.URL.revokeObjectURL(url);
                                            document.body.removeChild(a);
                                        });
                                    }
                                    // print the diagram by opening a new window holding SVG images of the diagram contents for each page
                                    function makeSvg() {
                                        var svg = myDiagram.makeSvg({
                                            scale: 1,
                                            background: "#787878"
                                        });
                                        var svgstr = new XMLSerializer().serializeToString(svg);
                                        var blob = new Blob([svgstr], {
                                            type: "image/svg+xml"
                                        });
                                        myCallback(blob);
                                    }
                                    window.addEventListener('DOMContentLoaded', init);
                                </script>

                                <div id="sample">
                                    <div style="width: 100%; display: flex; justify-content: space-between">
                                        <div id="myPaletteDiv" style="width: 200px; margin-right: 2px; background-color: rgb(120, 120, 120); position: relative; -webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                                            <canvas tabindex="0" width="100" height="600" style="position: absolute; top: 0px; left: 0px; z-index: 2; user-select: none; touch-action: none; width: 100px; height: 600px;">This
                                                text is displayed if your browser does not support the Canvas HTML element.</canvas>
                                            <div style="position: absolute; overflow: auto; width: 100px; height: 600px; z-index: 1;">
                                                <div style="position: absolute; width: 1px; height: 1px;"></div>
                                            </div>
                                        </div>
                                        <div id="myDiagramDiv" style="flex-grow: 1; height: 600px; background-color: rgb(120, 120, 120); position: relative; -webkit-tap-highlight-color: rgba(255, 255, 255, 0); cursor: auto;">
                                            <canvas tabindex="0" width="954" height="600" style="position: absolute; top: 0px; left: 0px; z-index: 2; user-select: none; touch-action: none; width: 954px; height: 600px; cursor: auto;">This
                                                text is displayed if your browser does not support the Canvas HTML element.</canvas>
                                            <div style="position: absolute; overflow: auto; width: 954px; height: 600px; z-index: 1;">
                                                <div style="position: absolute; width: 1px; height: 1px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <button hidden id="SaveButton" onclick="save()" disabled="">Save</button>

                                    <textarea hidden id="mySavedModel" style="width:100%;height:300px">{ "class": "go.GraphLinksModel",
"linkFromPortIdProperty": "fromPort",
"linkToPortIdProperty": "toPort",
"nodeDataArray": [
{"category":"Router","source":"http://localhost/monitoring//assets/topology/logo1.svg","key":-6,"loc":"-272 395"},
{"category":"Router","source":"http://localhost/monitoring//assets/topology/logo1.svg","key":-6,"loc":"-272 395"},
{"category":"Conditional2","text":"Indosat Radio","key":-8,"loc":"-270 449"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-2,"loc":"-75 395"},
{"category":"Router","source":"http://localhost/monitoring//assets/topology/logo2.svg","key":-7,"loc":"-271 534"},
{"category":"Conditional2","text":"Indosat FO","key":-5,"loc":"-272 569"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-9,"loc":"-73 534"},
{"category":"Router","text":"Core Switch","source":"http://localhost/monitoring//assets/topology/coreswitch.svg","key":-3,"loc":"122 395"},
{"category":"Conditional1","text":"Core Switch","key":-12,"loc":"116 371"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-13,"loc":"122 556"},
{"category":"Conditional1","text":"XIDTIVPLCTRP-ACSW01","key":-14,"loc":"124 530"},
{"category":"Conditional1","text":"XIDTIVPLCTRP-ACSW01","key":-16,"loc":"123 422"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-17,"loc":"150 651"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-18,"loc":"148 738"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-19,"loc":"153 835"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-20,"loc":"343 556"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-21,"loc":"347 651"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-22,"loc":"348 749"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-23,"loc":"347 835"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-24,"loc":"342 467"},
{"category":"Conditional1","text":"AP Office Lt2","key":-26,"loc":"348 781"},
{"category":"Conditional1","text":"AP Parkir Motor","key":-27,"loc":"350 868"},
{"category":"Conditional1","text":"AP Area 220ml","key":-28,"loc":"340 499"},
{"category":"Conditional1","text":"AP Office Lt1","key":-29,"loc":"347 683"},
{"category":"Conditional1","text":"AP Office Lt1","key":-30,"loc":"343 589"},
{"category":"Conditional1","text":"10.203.105.5","key":-31,"loc":"128 584"},
{"category":"Conditional1","text":"10.203.105.13","key":-32,"loc":"152 676"},
{"category":"Conditional1","text":"XIDTIVPLCTRP-ACSW01","key":-33,"loc":"153 714"},
{"category":"Conditional1","text":"10.203.105.14","key":-34,"loc":"148 764"},
{"category":"Conditional1","text":"XIDTIVPLCTRP-ACSW01","key":-35,"loc":"154 628"},
{"category":"Conditional1","text":"10.203.105.17","key":-36,"loc":"154 861"},
{"category":"Conditional1","text":"XIDTIVPLCTRP-ACSW01","key":-37,"loc":"159 812"},
{"category":"Conditional1","text":"Router","key":-38,"loc":"-74 509"},
{"category":"Conditional1","text":"10.203.22.218","key":-39,"loc":"-72 560"},
{"category":"Conditional1","text":"XIDTIVPLCTRP-ACSW01","key":-40,"loc":"-74 372"},
{"category":"Conditional1","text":"10.203.105.3","key":-41,"loc":"-73 419"},
{"category":"Conditional1","text":"28ac 9ef2 79e0","key":-42,"loc":"-71 577"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-43,"loc":"534 397"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-44,"loc":"531 1248"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-45,"loc":"531 1108"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-46,"loc":"531 974"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-47,"loc":"534 548"},
{"category":"Router","text":"Unmanage Switch","source":"http://localhost/monitoring//assets/topology/unswitch.svg","key":-4,"loc":"534 694"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-48,"loc":"778 397"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-49,"loc":"675 457"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-50,"loc":"674 531"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-51,"loc":"675 603"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-52,"loc":"674 676"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-53,"loc":"672 749"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-55,"loc":"681 1026"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-56,"loc":"815 972"},
{"category":"Router","text":"Unmanage Switch","source":"http://localhost/monitoring//assets/topology/unswitch.svg","key":-57,"loc":"815 1118"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-58,"loc":"1149 972"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-59,"loc":"1018 1107"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-54,"loc":"323 1227"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-60,"loc":"321 1072"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-61,"loc":"708 1210"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-62,"loc":"123 1073"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-63,"loc":"-117 1070"},
{"category":"Router","text":"Router","source":"http://localhost/monitoring//assets/topology/router.svg","key":-64,"loc":"-117 1210"},
{"category":"Router","text":"Unmanage Switch","source":"http://localhost/monitoring//assets/topology/unswitch.svg","key":-65,"loc":"-117 1344"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-66,"loc":"15 1255"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-67,"loc":"17 1346"},
{"category":"Access","text":"Access Point","source":"http://localhost/monitoring//assets/topology/ap.svg","key":-68,"loc":"17 1164"},
{"category":"Conditional1","text":"Rack Wallmount Evian 3","key":-11,"loc":"-122 1029"},
{"category":"Conditional1","text":"Rack Wallmount Kantin","key":-69,"loc":"116 1030"},
{"category":"Conditional1","text":"Rack Wallmount","key":-70,"loc":"324 1002"},
{"category":"Conditional1","text":"Rumah Sumber 1A","key":-71,"loc":"322 1023"},
{"category":"Conditional1","text":"Rack Wallmount","key":-72,"loc":"317 1157"},
{"category":"Conditional1","text":"Rumah Sumber 1B","key":-73,"loc":"320 1175"},
{"category":"Conditional1","text":"SERVER ROOM","key":-74,"loc":"534 916"},
{"category":"Conditional1","text":"AREA 2","key":-75,"loc":"532 933"},
{"category":"Conditional1","text":"Rack Wallmount","key":-76,"loc":"810 909"},
{"category":"Conditional1","text":"Data entry HOD area 2","key":-77,"loc":"814 928"},
{"category":"Conditional1","text":"Rack Wallmount","key":-78,"loc":"1142 904"},
{"category":"Conditional1","text":"Rumah Sumber 2","key":-79,"loc":"1142 929"}
],
"linkDataArray": [
{"from":-6,"to":-2,"fromPort":"R","toPort":"L","points":[-222,395,-212,395,-173.5,395,-173.5,395,-135,395,-125,395]},
{"from":-7,"to":-9,"fromPort":"R","toPort":"L","points":[-221,534,-211,534,-172,534,-172,534,-133,534,-123,534]},
{"from":-9,"to":-3,"fromPort":"R","toPort":"L","points":[-23,534,-13,534,24.5,534,24.5,395,62,395,72,395]},
{"from":-2,"to":-3,"fromPort":"R","toPort":"L","points":[-25,395,-15,395,23.5,395,23.5,395,62,395,72,395]},
{"from":-3,"to":-13,"fromPort":"B","toPort":"T","points":[122,445,122,455,122,475.5,122,475.5,122,496,122,506]},
{"from":-13,"to":-17,"fromPort":"L","toPort":"L","points":[72,556,62,556,62,651,76,651,90,651,100,651]},
{"from":-13,"to":-18,"fromPort":"L","toPort":"L","points":[72,556,62,556,62,738,75,738,88,738,98,738]},
{"from":-13,"to":-19,"fromPort":"L","toPort":"L","points":[72,556,62,556,62,835,77.5,835,93,835,103,835]},
{"from":-13,"to":-24,"fromPort":"R","toPort":"L","points":[172,556,182,556,232,556,232,467,282,467,292,467]},
{"from":-13,"to":-20,"fromPort":"R","toPort":"L","points":[172,556,182,556,232.5,556,232.5,556,283,556,293,556]},
{"from":-17,"to":-21,"fromPort":"R","toPort":"L","points":[200,651,210,651,248.5,651,248.5,651,287,651,297,651]},
{"from":-19,"to":-22,"fromPort":"R","toPort":"L","points":[203,835,213,835,250.5,835,250.5,749,288,749,298,749]},
{"from":-19,"to":-23,"fromPort":"R","toPort":"L","points":[203,835,213,835,250,835,250,835,287,835,297,835]},
{"from":-3,"to":-44,"fromPort":"R","toPort":"L","points":[172,395,182,395,180,395,180,395,445,395,445,1248,471,1248,481,1248]},
{"from":-44,"to":-43,"fromPort":"B","toPort":"L","points":[531,1298,531,1308,531,1308,468,1308,468,397,474,397,484,397]},
{"from":-43,"to":-47,"fromPort":"B","toPort":"T","points":[534,447,534,457,534,472.5,534,472.5,534,488,534,498]},
{"from":-47,"to":-4,"fromPort":"B","toPort":"T","points":[534,598,534,608,534,621,534,621,534,634,534,644]},
{"from":-43,"to":-48,"fromPort":"R","toPort":"L","points":[584,397,594,397,656,397,656,397,718,397,728,397]},
{"from":-47,"to":-49,"fromPort":"R","toPort":"L","points":[584,548,594,548,604.5,548,604.5,457,615,457,625,457]},
{"from":-47,"to":-50,"fromPort":"R","toPort":"L","points":[584,548,594,548,604,548,604,531,614,531,624,531]},
{"from":-47,"to":-51,"fromPort":"R","toPort":"L","points":[584,548,594,548,604.5,548,604.5,603,615,603,625,603]},
{"from":-47,"to":-52,"fromPort":"R","toPort":"L","points":[584,548,594,548,604,548,604,676,614,676,624,676]},
{"from":-47,"to":-53,"fromPort":"R","toPort":"L","points":[584,548,594,548,603,548,603,749,612,749,622,749]},
{"from":-45,"to":-55,"fromPort":"R","toPort":"L","points":[581,1108,591,1108,606,1108,606,1026,621,1026,631,1026]},
{"from":-56,"to":-57,"fromPort":"B","toPort":"T","points":[815,1022,815,1032,815,1045,815,1045,815,1058,815,1068]},
{"from":-45,"to":-56,"fromPort":"R","toPort":"L","points":[581,1108,591,1108,588,1108,588,1108,740,1108,740,972,755,972,765,972]},
{"from":-46,"to":-58,"fromPort":"R","toPort":"L","points":[581,974,591,974,588,974,588,974,595,974,595,1394,925,1394,925,972,1089,972,1099,972]},
{"from":-44,"to":-45,"fromPort":"T","toPort":"B","points":[531,1198,531,1188,531,1178,531,1178,531,1168,531,1158]},
{"from":-45,"to":-46,"fromPort":"T","toPort":"B","points":[531,1058,531,1048,531,1041,531,1041,531,1034,531,1024]},
{"from":-46,"to":-60,"fromPort":"L","toPort":"R","points":[481,974,471,974,426,974,426,1072,381,1072,371,1072]},
{"from":-46,"to":-54,"fromPort":"L","toPort":"R","points":[481,974,471,974,427,974,427,1227,383,1227,373,1227]},
{"from":-44,"to":-61,"fromPort":"R","toPort":"L","points":[581,1248,591,1248,619.5,1248,619.5,1210,648,1210,658,1210]},
{"from":-64,"to":-65,"fromPort":"B","toPort":"T","points":[-117,1260,-117,1270,-117,1277,-117,1277,-117,1284,-117,1294]},
{"from":-63,"to":-64,"fromPort":"B","toPort":"T","points":[-117,1120,-117,1130,-117,1140,-117,1140,-117,1150,-117,1160]},
{"from":-44,"to":-62,"fromPort":"R","toPort":"R","points":[581,1248,591,1248,622,1248,622,1344,481,1344,481,1344,226,1344,226,1073,183,1073,173,1073]},
{"from":-44,"to":-63,"fromPort":"R","toPort":"R","points":[581,1248,591,1248,621,1248,621,1372,73,1372,73,1070,-57,1070,-67,1070]},
{"from":-64,"to":-68,"fromPort":"R","toPort":"L","points":[-67,1210,-57,1210,-50,1210,-50,1164,-43,1164,-33,1164]},
{"from":-64,"to":-66,"fromPort":"R","toPort":"L","points":[-67,1210,-57,1210,-51,1210,-51,1255,-45,1255,-35,1255]},
{"from":-64,"to":-67,"fromPort":"R","toPort":"L","points":[-67,1210,-57,1210,-50,1210,-50,1346,-43,1346,-33,1346]},
{"from":-56,"to":-59,"fromPort":"R","toPort":"L","points":[865,972,875,972,900,972,900,1107,958,1107,968,1107]}
]}
</textarea><br>
                                    <button id="svgButton">Download Your Topology</button>

                                    <?php foreach ($topology as $l) : ?>
                                        <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                        <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                        <?php echo form_open_multipart('admin/topology/updateDataAksi') ?>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label>Uploud Your Topology Image</label>
                                            <input type="hidden" name="id" class="form-control" value="<?php echo $l->id ?>">
                                            <input type="file" name="photo" class="form-control" value="<?php echo $l->photo ?>">

                                        </div>




                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <?php echo form_close(); ?>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>

                    <!-- End of Main Content -->