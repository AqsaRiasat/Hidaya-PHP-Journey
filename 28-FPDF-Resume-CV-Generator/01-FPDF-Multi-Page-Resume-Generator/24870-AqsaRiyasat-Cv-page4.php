<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    require('fpdf.php');


    $name    = isset($_POST['name']) ? $_POST['name'] : '';
    $fname   = isset($_POST['fname']) ? $_POST['fname'] : '';
    $gen     = isset($_POST['gen']) ? $_POST['gen'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $email   = isset($_POST['email']) ? $_POST['email'] : '';
    $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $sch     = isset($_POST['sch']) ? $_POST['sch'] : '';
    $coll    = isset($_POST['coll']) ? $_POST['coll'] : '';
    $uni     = isset($_POST['uni']) ? $_POST['uni'] : '';
    $summary = isset($_POST['summary']) ? $_POST['summary'] : '';

    
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();

    
    // Left Line
    $pdf->Line(10, 10, 10, 287);
    // Top Line
    $pdf->Line(10, 10, 200, 10);
    // Right Line
    $pdf->Line(200, 10, 200, 287);
    // Bottom Line
    $pdf->Line(10, 287, 200, 287);

    // --- MAIN HEADER ---
    $pdf->SetFont('Arial', 'B', 22);
    $pdf->Cell(0, 15, 'CURRICULUM VITAE', 0, 1, 'C');
    $pdf->Ln(5);


    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 8, 'PERSONAL INFORMATION', 0, 1, 'L');
    $pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY()); 
    $pdf->Ln(3);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(45, 8, 'Full Name:', 0, 0);
    $pdf->Cell(0, 8, $name, 0, 1);

    $pdf->Cell(45, 8, "Father's Name:", 0, 0);
    $pdf->Cell(0, 8, $fname, 0, 1);

    $pdf->Cell(45, 8, 'Gender:', 0, 0);
    $pdf->Cell(0, 8, $gen, 0, 1);

    $pdf->Cell(45, 8, 'Country:', 0, 0);
    $pdf->Cell(0, 8, $country, 0, 1);
    $pdf->Ln(5);

    
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 8, 'CONTACT INFORMATION', 0, 1, 'L');
    $pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
    $pdf->Ln(3);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(45, 8, 'Email Address:', 0, 0);
    $pdf->Cell(0, 8, $email, 0, 1);

    $pdf->Cell(45, 8, 'Contact Number:', 0, 0);
    $pdf->Cell(0, 8, $contact, 0, 1);

    $pdf->Cell(45, 8, 'Home Address:', 0, 0);

    $pdf->MultiCell(0, 8, $address, 0, 'L');
    $pdf->Ln(5);

    
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 8, 'EDUCATION & ACADEMICS', 0, 1, 'L');
    $pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
    $pdf->Ln(3);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(45, 8, 'School Name:', 0, 0);
    $pdf->Cell(0, 8, $sch, 0, 1);

    $pdf->Cell(45, 8, 'College Name:', 0, 0);
    $pdf->Cell(0, 8, $coll, 0, 1);

    $pdf->Cell(45, 8, 'University Name:', 0, 0);
    $pdf->Cell(0, 8, $uni, 0, 1);
    $pdf->Ln(5);


    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 8, 'PROFESSIONAL SUMMARY', 0, 1, 'L');
    $pdf->Line(15, $pdf->GetY(), 195, $pdf->GetY());
    $pdf->Ln(3);

    $pdf->SetFont('Arial', '', 11);
    
    $pdf->MultiCell(0, 6, $summary, 0, 'J');

    
    $pdf->Output('I', 'Aqsa_Riyasat_CV.pdf');

} else {
    echo "Direct access not allowed! Please submit the form from page 1.";
}
?>