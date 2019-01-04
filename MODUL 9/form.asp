<html>
<body>
<form action="form.asp" method="get">
Nama kamu:<input type="text" name="fname" size="20" />
Pilih mobil favorite kamu : 
<input type="radio" name="cars"
<%if cars="BMW" then Response.Write("checked")%>
value="BMW">BMW</input>
</br>

<input type="radio" name="cars"
<%if cars="kijang" then Response.Write("checked")%>
value="kijang">kijang</input>
</br>

<input type="radio" name="cars"
<%if cars="timor" then Response.Write("checked")%>
value="timor">timor</input>

<input type="submit" value="submit" />
</form>
<%
dim fname
fname=Request.QueryString("fname")
dim cars
cars=Request.Form("cars")
if fname<>"" Then
Response.Write("Hallo "& fname &"!<br />")
Response.Write("Bagaimana kabar kamu?")
End if
if cars<>""then
Response.write("<p>Mobil favorite kamu adalah: "& cars &"</p>")
End if
%>
</body>
</html>