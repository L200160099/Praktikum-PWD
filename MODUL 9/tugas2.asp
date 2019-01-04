
<html>
	<head>
		<title>Program Penjumlahan</title>
	</head>
	<body>
		<form action="tugas2.asp" method="get">
			<table>
				<tr>
					<td>Nilai A adalah</td>
					<td>:</td>
					<td>
						<input type="text" name="A">
					</td>
				</tr>
				<tr>
					<td>Nilai B adalah</td>
					<td>:</td>
					<td>
						<input type="text" name="B">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Jumlahkan">
					</td>
				</tr>
			</table>
		</form>
		<%
			dim A
			A = Request.QueryString("A")
			dim B
			B = Request.QueryString("B")
			dim hasil
			hasil = Cint(A) + Cint(B)
			if A <> "" and B <> "" then
				response.write("Nilai A adalah " & A & "<br>")
				response.write("Nilai B adalah " & B & "<br>")
				response.write("Jadi Nilai A ditambah Nilai B adalah " & hasil)
			end if
		%>

	</body>
</html>