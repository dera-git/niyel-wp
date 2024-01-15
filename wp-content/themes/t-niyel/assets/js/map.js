(function($) {
    "use strict";
    $(document).ready(function(){
        get_map();

        $('.kl-radio-map').on('click, change' ,function (ev){
            get_map();
        });
    });

    var root = am5.Root.new("chartdiv");

    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    var chart = root.container.children.push(am5map.MapChart.new(root, {
        panX: "none",
        panY: "none",
        projection: am5map.geoNaturalEarth1(),
    }));

    var zommCtr = chart.set("zoomControl", am5map.ZoomControl.new(root, {
        x: am5.p0,
        centerX: am5.p0,
        y: am5.p100,
        centerY: am5.p100,
        dx: 20,
        opacity: 0,
    }));

    zommCtr.plusButton._settings.background.setAll({
        fill: am5.color(0x5762C7),
    })

    zommCtr.minusButton._settings.background.setAll({
        fill: am5.color(0x5762C7),
    })

    zommCtr.plusButton.setAll({
        width: 71,
        height: 60,
        fontsize: 45,
        align: "center",
        marginBottom: 25,
        cursor: "pointer",
        icon: am5.Graphics.new(root, {
            fill: am5.color(0xffffff),
            svgPath: "M19.5516 5.2872C36.7046 -2.56457 54.2467 0.0875644 59.5136 11.3073C65.0374 23.0743 55.249 42.6305 40.4784 49.2971C28.5796 54.6824 7.39608 47.261 1.43442 35.6995C-3.3901 26.2758 5.1899 11.8287 19.5516 5.2872Z"
        }),
        label: am5.Label.new(root, {
            text: "+",
            fontSize: 45,
            fontWeight: "700",
            lineHeight: 1,
        }),
    })

    zommCtr.minusButton.setAll({
        width: 71,
        height: 60,
        fontsize: 45,
        lineHeight: 1,
        align: "center",
        marginBottom: 25,
        icon: am5.Graphics.new(root, {
            fill: am5.color(0xffffff),
            svgPath: "M19.5516 5.2872C36.7046 -2.56457 54.2467 0.0875644 59.5136 11.3073C65.0374 23.0743 55.249 42.6305 40.4784 49.2971C28.5796 54.6824 7.39608 47.261 1.43442 35.6995C-3.3901 26.2758 5.1899 11.8287 19.5516 5.2872Z"
        }),
        label: am5.Label.new(root, {
            text: "-",
            fontSize: 45,
            fontWeight: "700",
            lineHeight: 1,
        }),
    })

    var continentSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_continentsLow,
        geodataNames: am5geodata_lang_FR,
        exclude: ["antarctica"]
    }));

    continentSeries.mapPolygons.template.setAll({
        tooltipText: "{name}",
        fill: am5.color(0xffffff),
        interactive: true
    });

    continentSeries.mapPolygons.template.states.create("hover", {
        fill: am5.color(0xEF8400),
    });

    continentSeries.mapPolygons.template.events.on("click", function (ev) {
        continentSeries.zoomToDataItem(ev.target.dataItem);
    });

    var colors = am5.ColorSet.new(root, {
        step: 2
    });
    colors.next();

    var countrySeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow,
        geodataNames: am5geodata_lang_FR,
        exclude: ["AQ"],
        visible: false
    }));

    countrySeries.mapPolygons.template.setAll({
        tooltipText: "{name}",
        fill: am5.color(0xffffff),
        toggleKey: "active",
        interactive: true
    });

    countrySeries.mapPolygons.template.states.create("hover", {
        fill: am5.color(0xEF8400),
    });

    $(window).on('load', function (){
        get_map();
    });

    function get_map(){
        if (document.getElementById('id-ct-africa').checked) {
            var africa_data = continentSeries.mapPolygons.template._entities[5]._dataItem;
            continentSeries.zoomToDataItem(africa_data);
            continentSeries.mapPolygons.template._entities[5].setAll({
                fill: am5.color(0xEF8400),
            });

            continentSeries.mapPolygons.template._entities[4].setAll({
                fill: am5.color(0xFFFFFF),
            });
            continentSeries.mapPolygons.template._entities[6].setAll({
                fill: am5.color(0xFFFFFF),
            })
            continentSeries.mapPolygons.template._entities[3].setAll({
                fill: am5.color(0xFFFFFF),
            });
        }
        if (document.getElementById('id-ct-europe').checked) {
            var europe_data = continentSeries.mapPolygons.template._entities[4]._dataItem;
            continentSeries.zoomToDataItem(europe_data);
            continentSeries.mapPolygons.template._entities[4].setAll({
                fill: am5.color(0xEF8400),
            });

            continentSeries.mapPolygons.template._entities[5].setAll({
                fill: am5.color(0xFFFFFF),
            });
            continentSeries.mapPolygons.template._entities[6].setAll({
                fill: am5.color(0xFFFFFF),
            });
            continentSeries.mapPolygons.template._entities[3].setAll({
                fill: am5.color(0xFFFFFF),
            });
        }

        if (document.getElementById('id-ct-asia').checked) {
            var asia_data = continentSeries.mapPolygons.template._entities[6]._dataItem;
            continentSeries.zoomToDataItem(asia_data);
            continentSeries.mapPolygons.template._entities[6].setAll({
                fill: am5.color(0xEF8400),
            });

            continentSeries.mapPolygons.template._entities[4].setAll({
                fill: am5.color(0xFFFFFF),
            });
            continentSeries.mapPolygons.template._entities[5].setAll({
                fill: am5.color(0xFFFFFF),
            })
            continentSeries.mapPolygons.template._entities[3].setAll({
                fill: am5.color(0xFFFFFF),
            });
        }

        if (document.getElementById('id-ct-south-america').checked) {
            var america_south_data = continentSeries.mapPolygons.template._entities[3]._dataItem;
            continentSeries.zoomToDataItem(america_south_data);
            continentSeries.mapPolygons.template._entities[3].setAll({
                fill: am5.color(0xEF8400),
            })

            continentSeries.mapPolygons.template._entities[4].setAll({
                fill: am5.color(0xFFFFFF),
            })
            continentSeries.mapPolygons.template._entities[6].setAll({
                fill: am5.color(0xFFFFFF),
            })
            continentSeries.mapPolygons.template._entities[5].setAll({
                fill: am5.color(0xFFFFFF),
            })
        }
    }
    
})(jQuery);

