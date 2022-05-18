function watch() {
    let curDay = new Date();
    let curHours = curDay.getHours();
    let curMinutes = curDay.getMinutes();
    let curSeconds = curDay.getSeconds();

    let first_hour = document.getElementById("first-hour");
    let last_hour = document.getElementById("last-hour");
    let first_minutes = document.getElementById("first-minutes");
    let last_minutes = document.getElementById("last-minutes");
    let first_second = document.getElementById("first-seconds");
    let last_second = document.getElementById("last-seconds");

    if (curHours < 10) {
        first_hour.innerHTML = 0;
        last_hour.innerHTML = curHours;
    } else {
        first_hour.innerHTML = (curHours - (curHours % 10)) / 10;
        last_hour.innerHTML = curHours % 10;
    }

    if (curMinutes < 10) {
        first_minutes.innerHTML = 0;
        last_minutes.innerHTML = curMinutes;
    } else {
        first_minutes.innerHTML = (curMinutes - (curMinutes % 10)) / 10;
        last_minutes.innerHTML = curMinutes % 10;
    }

    if (curSeconds < 10) {
        first_second.innerHTML = 0;
        last_second.innerHTML = curSeconds;
    } else {
        first_second.innerHTML = (curSeconds - (curSeconds % 10)) / 10
        last_second.innerHTML = curSeconds % 10;
    }
}

let dem_gio = setInterval(watch);
