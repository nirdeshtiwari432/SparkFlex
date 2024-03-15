import email
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

def send_email(sender_email, sender_password, receiver_email, subject, message):
    # Set up the MIME
    msg = MIMEMultipart()
    msg['From'] = sender_email
    msg['To'] = receiver_email
    msg['Subject'] = subject

    # Attach the message to the MIME
    msg.attach(MIMEText(message, 'plain'))

    try:
        # Connect to the SMTP server
        server = smtplib.SMTP('smtp.gmail.com', 587)
        server.starttls()
        # Log in to the email account
        server.login(sender_email, sender_password)
        # Send the email
        server.sendmail(sender_email, receiver_email, msg.as_string())
        # Quit the server
        server.quit()
        print("Email sent successfully!")
    except Exception as e:
        print("Error: ", e)

# Example usage:nirdeshtiwari432@gmail.com
sender_email = "nirdeshtiwari432@gmail.com"
sender_password = "8359968602"
receiver_email = "xoxulata@mailgolem.com"
subject = "Alert: Something important happened!"
message = "This is an important alert message."

send_email(sender_email, sender_password, receiver_email, subject, message)
