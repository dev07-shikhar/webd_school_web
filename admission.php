<?php
$pageTitle = "Admission";
include "header.php";
?>

<section class="content-box">
    <h2>Student Admission Form</h2>
    <p>Please fill in the details below to apply for admission.</p>

    <form action="submit.php" method="POST" class="admission-form">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label>Gender:</label>
        <div class="radio-row">
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
            <label><input type="radio" name="gender" value="Other"> Other</label>
        </div>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="class">Class Applying For:</label>
        <select id="class" name="class" required>
            <option value="">-- Select Class --</option>
            <option value="VI">VI</option>
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="IX">IX</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <button type="submit">Submit Admission Form</button>
    </form>
</section>

<?php include "footer.php"; ?>