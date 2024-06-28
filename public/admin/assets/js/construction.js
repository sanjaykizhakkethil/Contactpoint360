function updateTimer() {
  future = Date.parse("Dec 19, 2024 11:30:00");
  now = new Date();
  diff = future - now;

  days = Math.floor(diff / (1000 * 60 * 60 * 24));
  hours = Math.floor(diff / (1000 * 60 * 60));
  mins = Math.floor(diff / (1000 * 60));
  secs = Math.floor(diff / 1000);

  d = days;
  h = hours - days * 24;
  m = mins - hours * 60;
  s = secs - mins * 60;

  document.getElementById("timer")
      .innerHTML =
      '<div class="col-xxl-3 col-xl-6 col-lg-6 col-6"><div class="p-3 mb-3 under-maintenance-time rounded primary"><h4 class="fw-semibold mb-1 fs-30 text-fixed-white">' + d + '</h4><p class="mb-1 fs-13 text-fixed-white">Days</p></div></div>' +
      '<div class="col-xxl-3 col-xl-6 col-lg-6 col-6"><div class="p-3 mb-3 under-maintenance-time rounded success"><h4 class="fw-semibold mb-1 fs-30 text-fixed-white">' + h + '</h4><p class="mb-1 fs-13 text-fixed-white">Hours</p></div></div>' +
      '<div class="col-xxl-3 col-xl-6 col-lg-6 col-6"><div class="p-3 mb-3 under-maintenance-time rounded danger"><h4 class="fw-semibold mb-1 fs-30 text-fixed-white">' + m + '</h4><p class="mb-1 fs-13 text-fixed-white">Minutes</p></div></div>' +
      '<div class="col-xxl-3 col-xl-6 col-lg-6 col-6"><div class="p-3 mb-3 under-maintenance-time rounded info"><h4 class="fw-semibold mb-1 fs-30 text-fixed-white">' + s + '</h4><p class="mb-1 fs-13 text-fixed-white">Seconds</p></div></div>'
}
setInterval('updateTimer()', 1000);