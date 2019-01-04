<%
dim numvisits
response.cookies("NumVisits").Expires=date+365
numvisits=request.cookies("NumVisits")
if numvisits="" then
response.cookies("numvisits")=1
response.write("Selamat datang! ini adalah pertama kali kamu mengunjungi halaman ini.")
else
response.cookies("numvisits")=numvisits+1
response.write("kamu sudah mengunjungi")
response.write("halaman ini"& numvisits)
if numvisits=1 then
response.write " kali sebelumnya!"
else
response.write " kali sebelumnya!"
end if
end if
%>
<html>
<body>

</body>
</html>