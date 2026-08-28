<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regular Expressions Practice</title>
</head>
<body>

    <h1 style="color: #03045e;">Regular Expressions Practice</h1>
    
    <script>
        var s1 = "This is an Orange juice.";
        var p1 = /orange/i;
        document.write("1. Output: " + s1.match(p1) + "<br/><br/>");

        var s2 = "bed";
        var p2 = /[a-e]/;
        document.write("2. Output: " + s2.match(p2) + "<br/><br/>");

        var s3 = "queen";
        var p3 = /[pqr]/;
        document.write("3. Output: " + s3.match(p3) + "<br/><br/>");

        var s4 = "dog";
        var p4 = /[^abc]/;
        document.write("4. Output: " + s4.match(p4) + "<br/><br/>");

        var s5 = "superman";
        var p5 = /\bsuper/;
        document.write("5. Output: " + p5.test(s5) + "<br/><br/>");

        var s6 = "jumped";
        var p6 = /ed\b/;
        document.write("6. Output: " + p6.test(s6) + "<br/><br/>");

        var s7 = "I have a dog";
        var p7 = /(cat|dog)/;
        document.write("7. Output: " + s7.match(p7) + "<br/><br/>");

        var s8 = "blue car and red car";
        var p8 = /car/g;
        document.write("8. Output: " + s8.replace(p8, "bike") + "<br/><br/>");

        var s9 = "My ID is 98";
        var p9 = /\d/;
        document.write("9. Output: " + s9.match(p9) + "<br/><br/>");

        var s10 = "786abc";
        var p10 = /\D/;
        document.write("10. Output: " + s10.match(p10) + "<br/><br/>");

        var s11 = "Value is 7";
        var p11 = /[5-9]/;
        document.write("11. Output: " + s11.match(p11) + "<br/><br/>");

        var s12 = "Code is 4567";
        var p12 = /\d\d\d/;
        document.write("12. Output: " + s12.match(p12) + "<br/><br/>");

        var s13 = "3rd position";
        var p13 = /^\d/;
        document.write("13. Output: " + p13.test(s13) + "<br/><br/>");

        var s14 = "Number9";
        var p14 = /\d$/;
        document.write("14. Output: " + p14.test(s14) + "<br/><br/>");

        var s15 = "Year is 2026";
        var p15 = /\d{4}/;
        document.write("15. Output: " + s15.match(p15) + "<br/><br/>");

        var s16 = "!hello";
        var p16 = /\w/;
        document.write("16. Output: " + s16.match(p16) + "<br/><br/>");

        var s17 = "admin@123";
        var p17 = /\W/;
        document.write("17. Output: " + s17.match(p17) + "<br/><br/>");

        var s18 = "A B";
        var p18 = /\s/;
        document.write("18. Output: " + s18.match(p18) + "<br/><br/>");

        var s19 = "  test";
        var p19 = /\S/;
        document.write("19. Output: " + s19.match(p19) + "<br/><br/>");

        var s20 = "site.com";
        var p20 = /\./;
        document.write("20. Output: " + s20.match(p20) + "<br/><br/>");

        var s21 = "Done?";
        var p21 = /\?/;
        document.write("21. Output: " + p21.test(s21) + "<br/><br/>");

        var s22 = "A+ Grade";
        var p22 = /\+/;
        document.write("22. Output: " + s22.match(p22) + "<br/><br/>");

        var s23 = "goooal";
        var p23 = /o+/;
        document.write("23. Output: " + s23.match(p23) + "<br/><br/>");

        var s24 = "welcome";
        var p24 = /z*/;
        document.write("24. Output: " + s24.match(p24) + "<br/><br/>");

        var s25 = "favor"; 
        var p25 = /favou?r/;
        document.write("25. Output: " + s25.match(p25) + "<br/><br/>");

        var s26 = "12345";
        var p26 = /\d{2,4}/;
        document.write("26. Output: " + s26.match(p26) + "<br/><br/>");

        var s27 = "Learning PHP";
        var p27 = new RegExp("php", "i");
        document.write("27. Output: " + p27.exec(s27) + "<br/><br/>");

        var s28 = "Hello world";
        var findWord = "world";
        var p28 = new RegExp(findWord);
        document.write("28. Output: " + p28.test(s28) + "<br/><br/>");

        var s29 = "Om";
        var p29 = /[a-zA-Z]{3,}/;
        document.write("29. Output: " + p29.test(s29) + "<br/><br/>");

        var s30 = "user@domain";
        var p30 = /\w+@\w+/;
        document.write("30. Output: " + p30.test(s30) + "<br/><br/>");
    </script>

</body>
</html>