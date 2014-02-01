<%
Dim mail, body

body = "Name: " & Request.Form("name") & vbcrlf & vbcrlf & "Message:" & Request.Form("message") & vbcrlf & "Phone Number:" & Request.Form("number")

Set mail = Server.CreateObject("CDO.Message")
mail.To = Request.Form("To")
mail.From = Request.Form("email")
mail.Subject = Request.Form("Subject")
mail.TextBody = body
mail.Send()

Response.Write("Thank you for your message. I will get back to you as soon as I can.")

Set mail = nothing
Set body = nothing
%>