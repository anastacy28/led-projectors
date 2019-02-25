function two(a) {
		return (9 < a ? "" : "0") + a
}
function formatTime(a) {
		a = Math.floor(a / 1E3);
		var b = Math.floor(a / 60),
				c = Math.floor(b / 60),
				d = c / 24 | 0,
				c = c % 24;
		a %= 60;
		b %= 60;

		hours1 = (two(c) >= 10) ? two(c).toString().charAt(0) : '0';
		hours2 = (two(c) >= 10) ? two(c).toString().charAt(1) : two(c).toString().charAt(0);

		mins1 = (two(b) >= 10) ? two(b).toString().charAt(0) : '0';
		mins2 = (two(b) >= 10) ? two(b).toString().charAt(1) : two(b).toString().charAt(0);

		secs1 = (two(a) >= 10) ? two(a).toString().charAt(0) : '0';
		secs2 = (two(a) >= 10) ? two(a).toString().charAt(1) : two(a).toString().charAt(1);

		return "<div class='countbox-num'><div class='countbox-days1'><span></span>" + 0 + "</div><div class='countbox-days2'><span></span>" + d + "</div><div class='countbox-days-text'></div></div>" +
		"<div class='countbox-space'></div>" +
		"<div class='countbox-num'><div class='countbox-hours1'><span></span>" + hours1 + "</div><div class='countbox-hours2'><span></span>" + hours2 + "</div><div class='countbox-hours-text'></div></div>" +
		"<div class='countbox-space'></div>" +
		"<div class='countbox-num'><div class='countbox-mins1'><span></span>" + mins1 + "</div><div class='countbox-mins2'><span></span>" + mins2 + "</div><div class='countbox-mins-text'></div></div>" +
		"<div class='countbox-space'></div>" +
		"<div class='countbox-num'><div class='countbox-secs1'><span></span>" + secs1 + "</div><div class='countbox-secs2'><span></span>" + secs2 + "</div><div class='countbox-secs-text'></div></div>";
};

function Time() {
		var data = Date.parse('02/01/2014') // дата начала 1 двухдневки строго "месяц/день/год"
		data = new Date(data);
		data.setMinutes((-180 - data.getTimezoneOffset()), 0, 0); //для коррекции   запустить в зоне акции alert((new Date).getTimezoneOffset()) и поменять число
		for (; (new Date).getTime() > data; )  {
		data.setDate(data.getDate()+2)//через сутки +1 , через 6 дней +6
		}
		var a = data.getTime() -  (new Date).getTime();
		document.getElementById("countbox").innerHTML = formatTime(a);
		window.setTimeout(Time, 1E3)
};
Time()
