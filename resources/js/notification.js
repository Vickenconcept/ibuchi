import Toastify from "toastify-js";
import $ from "jquery";

export function notify(message, type = "info") {
    let duration = type === "error" ? 5000 : 3000;
    let color = "#fff";
    let bgColor = "#F2980A";
    console.log("hello");

    switch (type) {
        case "error":
            bgColor = "#fae5e7";
            color = "#c21919";
            break;
        case "success":
            bgColor = "#e7fbf2";
            color = "#0b7433";
            break;
    }

    Toastify({
        text: message,
        duration: duration,
        close: true,
        stopOnFocus: true,
        style: {
            color: color,
            background: bgColor,
            display: "flex",
        },
    }).showToast();
}

(function () {
    "use strict";

    const notification = $("#notification");
    const validation = $(".validation-msg");

    if (notification.length) {
        notify(notification.data("msg"), notification.data("type"));
    }

    if (validation.length) {
        validation.each(function () {
            notify($(this).data("msg"), "error");
        });
    }
})();
