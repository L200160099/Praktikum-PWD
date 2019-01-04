<html>
	<body>
	Tanggal sekarang adalah:<%response.write(data())%>.
	</br>
	Waktu di server lokal adalah:<%response.write(time())%>.
	Contoh format tanggal dan waktu:
	<%
	response.write(FormatDateTime(date(),vbgeneraldate))
	response.write("<br />")
	response.write(FormatDateTime(date(),vblongdate))
	response.write("<br />")
	response.write(FormatDateTime(date(),vbshortdate))
	response.write("<br />")
	response.write(FormatDateTime(now(),vblongtime))
	response.write("<br />")
	response.write(FormatDateTime(now(),vbshorttime))
	%>
	Hari ini
	<%respon.write(WeekdayName(weekday(date)))%>,
	<br />
	dan bulan ini
	<%response.write(MonthName(month(date)))%>
	</body>
</html>