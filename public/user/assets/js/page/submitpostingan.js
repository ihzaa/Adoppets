const elLat = document.getElementById("latitude");
const elLng = document.getElementById("longitude");

navigator.geolocation.getCurrentPosition(
    (pos) => {
        localLoc = pos.coords;
        objCoords = {
            lat: localLoc.latitude,
            lng: localLoc.longitude,
        };
        fetch(
            `https://revgeocode.search.hereapi.com/v1/revgeocode?at=${localLoc.latitude}%2C${localLoc.longitude}&lang=en-US&apikey=IRYdcn93t9FECP0VLR1v8UrMcEO5042jdifi7QNoWKU`
        )
            .then((res) => res.json())
            .then((data) => {
                document.getElementById("city").value =
                    data.items[0].address.city;
            })
            .catch((err) => console.log(err));
        function addDraggableMarker(map, behavior) {
            var marker = new H.map.Marker(objCoords, {
                volatility: true,
            });
            marker.draggable = true;
            map.addObject(marker);
            map.addEventListener(
                "dragstart",
                function (ev) {
                    var target = ev.target,
                        pointer = ev.currentPointer;
                    if (target instanceof H.map.Marker) {
                        var targetPosition = map.geoToScreen(
                            target.getGeometry()
                        );
                        target["offset"] = new H.math.Point(
                            pointer.viewportX - targetPosition.x,
                            pointer.viewportY - targetPosition.y
                        );
                        behavior.disable();
                    }
                },
                false
            );
            map.addEventListener(
                "dragend",
                function (ev) {
                    var target = ev.target;
                    if (target instanceof H.map.Marker) {
                        behavior.enable();
                    }
                },
                false
            );
            map.addEventListener(
                "drag",
                function (ev) {
                    var target = ev.target,
                        pointer = ev.currentPointer;
                    if (target instanceof H.map.Marker) {
                        target.setGeometry(
                            map.screenToGeo(
                                pointer.viewportX - target["offset"].x,
                                pointer.viewportY - target["offset"].y
                            )
                        );
                    }
                },
                false
            );
        }
        var platform = new H.service.Platform({
            apikey: "nnHrOmFFjmffnY9Xp68b7iIBObnxTfgzwnerEaYVKqg",
        });
        var defaultLayers = platform.createDefaultLayers();
        var map = new H.Map(
            document.getElementById("map"),
            defaultLayers.vector.normal.map,
            {
                center: objCoords,
                zoom: 12,
                pixelRatio: window.devicePixelRatio || 1,
            }
        );
        window.addEventListener("resize", () => map.getViewPort().resize());
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        var ui = H.ui.UI.createDefault(map, defaultLayers, "en-US");
        addDraggableMarker(map, behavior);
        const elLat = document.getElementById("latitude");
        const elLng = document.getElementById("longitude");
        map.addEventListener("dragend", function (ev) {
            let target = ev.target;
            if (target instanceof H.map.Marker) {
                behavior.enable();
                let res = map.screenToGeo(
                    ev.currentPointer.viewportX,
                    ev.currentPointer.viewportY
                );
                elLat.value = res.lat;
                elLng.value = res.lng;

                fetch(
                    `https://revgeocode.search.hereapi.com/v1/revgeocode?at=${res.lat}%2C${res.lng}&lang=en-US&apikey=IRYdcn93t9FECP0VLR1v8UrMcEO5042jdifi7QNoWKU`
                )
                    .then((res) => res.json())
                    .then((data) => {
                        document.getElementById("city").value =
                            data.items[0].address.city;
                    })
                    .catch((err) => console.log(err));
            }
        });
    },
    () => {
        objCoords = {
            lat: "-6.200000",
            lng: "106.816666",
        };
        // elLat.value = objCoords.lat;
        // elLng.value = objCoords.lng;
        function addDraggableMarker(map, behavior) {
            var marker = new H.map.Marker(objCoords, {
                volatility: true,
            });
            marker.draggable = true;
            map.addObject(marker);
            map.addEventListener(
                "dragstart",
                function (ev) {
                    var target = ev.target,
                        pointer = ev.currentPointer;
                    if (target instanceof H.map.Marker) {
                        var targetPosition = map.geoToScreen(
                            target.getGeometry()
                        );
                        target["offset"] = new H.math.Point(
                            pointer.viewportX - targetPosition.x,
                            pointer.viewportY - targetPosition.y
                        );
                        behavior.disable();
                    }
                },
                false
            );
            map.addEventListener(
                "dragend",
                function (ev) {
                    var target = ev.target;
                    if (target instanceof H.map.Marker) {
                        behavior.enable();
                    }
                },
                false
            );
            map.addEventListener(
                "drag",
                function (ev) {
                    var target = ev.target,
                        pointer = ev.currentPointer;
                    if (target instanceof H.map.Marker) {
                        target.setGeometry(
                            map.screenToGeo(
                                pointer.viewportX - target["offset"].x,
                                pointer.viewportY - target["offset"].y
                            )
                        );
                    }
                },
                false
            );
        }
        var platform = new H.service.Platform({
            apikey: "nnHrOmFFjmffnY9Xp68b7iIBObnxTfgzwnerEaYVKqg",
        });
        var defaultLayers = platform.createDefaultLayers();
        var map = new H.Map(
            document.getElementById("map"),
            defaultLayers.vector.normal.map,
            {
                center: objCoords,
                zoom: 12,
                pixelRatio: window.devicePixelRatio || 1,
            }
        );
        window.addEventListener("resize", () => map.getViewPort().resize());
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        var ui = H.ui.UI.createDefault(map, defaultLayers, "en-US");
        addDraggableMarker(map, behavior);

        map.addEventListener("dragend", function (ev) {
            let target = ev.target;
            if (target instanceof H.map.Marker) {
                behavior.enable();
                let res = map.screenToGeo(
                    ev.currentPointer.viewportX,
                    ev.currentPointer.viewportY
                );
                elLat.value = res.lat;
                elLng.value = res.lng;

                fetch(
                    `https://revgeocode.search.hereapi.com/v1/revgeocode?at=${res.lat}%2C${res.lng}&lang=en-US&apikey=IRYdcn93t9FECP0VLR1v8UrMcEO5042jdifi7QNoWKU`
                )
                    .then((res) => res.json())
                    .then((data) => {
                        document.getElementById("city").value =
                            data.items[0].address.city;
                    })
                    .catch((err) => console.log(err));
            }
        });
    }
);
