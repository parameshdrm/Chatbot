package com.emailService.emailService;

public class Email {
    private String toAddress;
    private String fromAddress;
    private String subject;
    private String emailBody;

    public String getToAddress() {
        return toAddress;
    }

    public String getFromAddress() {
        return fromAddress;
    }

    public void setFromAddress(String fromAddress) {
        this.fromAddress = fromAddress;
    }

    public String getSubject() {
        return subject;
    }

    public void setSubject(String subject) {
        this.subject = subject;
    }

    public String getEmailBody() {
        return emailBody;
    }

    public void setEmailBody(String emailBody) {
        this.emailBody = emailBody;
    }

    public void setToAddress(String toAddress) {
        this.toAddress = toAddress;
    }

    @Override
    public String toString() {
        return "To Address:" + this.toAddress + " From Address:" + this.fromAddress + " Subject:" + this.subject + " Email Body:"+this.emailBody;
    }
}
