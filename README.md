# Web-Based Examination and Certification Portal

This project is a secure, multi-tiered web application developed for the **Bhaskaracharya Institute for Space Applications and Geo-Informatics (BISAG)**.  
It streamlines the process of online examinations, evaluation, and automated certificate generation for candidates and jury members.  
The system includes dedicated modules for administrators, examiners, and participants.

---

## Overview

The platform automates the entire examination workflow — from question management and test conduction to result evaluation and certificate issuance.  
Built using **PHP** and **MySQL**, it incorporates **role-based access control**, **automated emailing**, and **PDF certificate generation** for efficient and secure operation.

---

## Features

- **Multi-Role Access System**  
  Separate dashboards for Admin, Jury, and Participants with controlled permissions.

- **Secure Login and Authentication**  
  Implemented with PHP session management and CAPTCHA verification.

- **Exam Management**  
  Admins can create, schedule, and manage tests; participants can attempt tests online.

- **Automated Evaluation and Result Processing**  
  Results are stored in the database and displayed dynamically through the admin panel.

- **Email Integration (PHPMailer)**  
  Sends test notifications, verification emails, and certificate download links to users.

- **Certificate Generation (FPDF)**  
  Automatically generates digital certificates in PDF format with candidate details.

- **Error Handling and Access Control**  
  Includes custom error pages (e.g., error403.html) and .htaccess-based security restrictions.

---

## Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript  
- **Backend:** PHP (Core PHP)  
- **Database:** MySQL  
- **Libraries and Tools:**  
  - PHPMailer for email automation  
  - FPDF for certificate generation  
  - CAPTCHA for spam prevention  
- **Server Environment:** Apache (XAMPP or WAMP)

---

## Project Structure

