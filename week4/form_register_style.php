<?php

$success = false;
$errMsg = "";
$nameErr = "";
$emailErr = "";
$pobErr = "";
$genderErr = "";
$facultyErr = "";
$langErr = "";
$commentErr = "";

if (isset($_POST["submit"])) {

    $success = true;

    if (empty($_POST["fullname"])) {
        $success = false;
        $nameErr = "Please fill name required fields";
    }

    if (empty($_POST["email"])) {
        $success = false;
        $emailErr = "Please fill email required fields";
    }

    if (empty($_POST["pob"])) {
        $success = false;
        $pobErr = "Please fill place of birth required fields";
    }

    if (empty($_POST["gender"])) {
        $success = false;
        $genderErr = "Please select gender required fields";
    }

    if (empty($_POST["faculty"])) {
        $success = false;
        $facultyErr = "Please select faculty required fields";
    }

    if (empty($_POST["languages"])) {
        $success = false;
        $langErr = "Please select at least one language";
    }

    if (empty($_POST["comment"])) {
        $success = false;
        $commentErr = "Please fill comment required fields";
    }

    if (!$success) {
        $errMsg = "Please fill all required fields.";
    }

    if ($success) {
        echo '<div class="container mt-4">
        <div class="row justify-content-center"><div class="col-md-8 col-lg-7">
                <div class="alert alert-success success-box shadow">
                    <h4 class="alert-heading"><i class="bi bi-check-circle-fill me-2"></i>Student Information</h4>
                    <hr>';

        echo "Fullname: " . htmlspecialchars($_POST["fullname"]) . "<br>";
        echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
        echo "Place of Birth: " . htmlspecialchars($_POST["pob"]) . "<br>";
        echo "Gender: " . htmlspecialchars($_POST["gender"]) . "<br>";
        echo "Faculty: " . htmlspecialchars($_POST["faculty"]) . "<br>";

        echo "Languages: ";
        if (isset($_POST["languages"])) {
            echo htmlspecialchars(implode(", ", $_POST["languages"]));
        }

        echo "<br>";
        echo "Comment: " . htmlspecialchars($_POST["comment"]) . "<br>";

        echo '  </div>
              </div> </div>
              </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --brand-1: #4f46e5;
            --brand-2: #7c3aed;
        }

        body {
            font-family: 'Poppins', system-ui, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #eef2ff 0%, #f5f3ff 50%, #fdf2f8 100%);
            background-attachment: fixed;
        }

        .form-card {
            border: 0;
            border-radius: 1.25rem;
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
            color: #fff;
            padding: 2rem 1rem;
            text-align: center;
        }

        .form-header .icon-circle {
            width: 64px;
            height: 64px;
            margin: 0 auto 0.75rem;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.9rem;
        }

        .form-header h2 {
            font-weight: 700;
            font-size: 1.6rem;
        }

        .form-header p {
            opacity: 0.85;
            font-size: 0.9rem;
        }

        legend {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--brand-1);
            border-bottom: 2px solid #e0e7ff;
            padding-bottom: 0.5rem;
        }

        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
            color: #374151;
        }

        .input-group-text {
            background: #f5f3ff;
            color: var(--brand-1);
            border-right: 0;
            border-radius: 0.6rem 0 0 0.6rem;
        }

        .form-control,
        .form-select {
            border-radius: 0.6rem;
            padding: 0.6rem 0.9rem;
            border-color: #dbe0ea;
        }

        .input-group .form-control,
        .input-group .form-select {
            border-left: 0;
            border-radius: 0 0.6rem 0.6rem 0;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--brand-2);
            box-shadow: 0 0 0 0.2rem rgba(124, 58, 237, 0.15);
        }

        /* Gender + Language pill buttons */
        .btn-check + .btn {
            border-radius: 2rem;
            padding: 0.35rem 1.1rem;
            font-size: 0.9rem;
            border-color: #c7d2fe;
            color: var(--brand-1);
            margin-right: 0.25rem;
            margin-bottom: 0.4rem;
        }

        .btn-check:checked + .btn {
            background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
            border-color: transparent;
            color: #fff;
        }

        .btn-check:focus + .btn {
            box-shadow: 0 0 0 0.2rem rgba(124, 58, 237, 0.2);
        }

        .btn-register {
            background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
            border: 0;
            color: #fff;
            border-radius: 0.7rem;
            padding: 0.65rem 1.8rem;
            font-weight: 600;
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-register:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(79, 70, 229, 0.35);
        }

        .btn-clear {
            border-radius: 0.7rem;
            padding: 0.65rem 1.5rem;
        }

        .error-text {
            color: #dc2626;
            font-size: 0.82rem;
            margin-top: 0.3rem;
        }

        .card-footer {
            background: #fafafa;
            font-size: 0.85rem;
        }

        .success-box {
            border: 0;
            border-left: 6px solid #16a34a;
            border-radius: 1rem;
            font-family: 'Poppins', system-ui, sans-serif;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card shadow-lg form-card">

                <div class="form-header">
                    <div class="icon-circle"><i class="bi bi-mortarboard-fill"></i></div>
                    <h2 class="mb-1">Student Registration Form</h2>
                    <p class="mb-0">Fill in the details below to register</p>
                </div>

                <div class="card-body p-4 p-md-5">

                    <?php if (!empty($errMsg)) { ?>
                        <div class="alert alert-danger d-flex align-items-center rounded-3">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <div><?php echo htmlspecialchars($errMsg); ?></div>
                        </div>
                    <?php } ?>

                    <form method="post" action="">

                        <fieldset>
                            <legend class="mb-4">
                                <i class="bi bi-person-lines-fill me-2"></i>Personal Information
                            </legend>

                            <!-- Fullname -->
                            <div class="mb-3">
                                <label for="fullname" class="form-label">
                                    Fullname <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input
                                        type="text"
                                        class="form-control <?php echo $nameErr ? 'is-invalid' : ''; ?>"
                                        id="fullname"
                                        name="fullname"
                                        placeholder="Enter your fullname"
                                        value="<?php
                                            if (!$success && isset($_POST["fullname"])) {
                                                echo htmlspecialchars($_POST["fullname"]);
                                            }
                                        ?>"
                                    >
                                </div>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($nameErr); ?>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input
                                        type="email"
                                        class="form-control <?php echo $emailErr ? 'is-invalid' : ''; ?>"
                                        id="email"
                                        name="email"
                                        placeholder="Enter your email"
                                        value="<?php
                                            if (!$success && isset($_POST["email"])) {
                                                echo htmlspecialchars($_POST["email"]);
                                            }
                                        ?>"
                                    >
                                </div>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($emailErr); ?>
                                </div>
                            </div>

                            <!-- Place of Birth -->
                            <div class="mb-3">
                                <label for="pob" class="form-label">
                                    Place of Birth <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <input
                                        type="text"
                                        class="form-control <?php echo $pobErr ? 'is-invalid' : ''; ?>"
                                        id="pob"
                                        name="pob"
                                        placeholder="Enter your place of birth"
                                        value="<?php
                                            if (!$success && isset($_POST["pob"])) {
                                                echo htmlspecialchars($_POST["pob"]);
                                            }
                                        ?>"
                                    >
                                </div>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($pobErr); ?>
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label class="form-label d-block">
                                    Gender <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="radio"
                                    class="btn-check"
                                    id="male"
                                    name="gender"
                                    value="male"
                                    <?php
                                    if (!$success && isset($_POST["gender"])
                                        && $_POST["gender"] == "male") {
                                        echo "checked";
                                    }
                                    ?>
                                >
                                <label for="male" class="btn">
                                    <i class="bi bi-gender-male me-1"></i>Male
                                </label>

                                <input
                                    type="radio"
                                    class="btn-check"
                                    id="female"
                                    name="gender"
                                    value="female"
                                    <?php
                                    if (!$success && isset($_POST["gender"])
                                        && $_POST["gender"] == "female") {
                                        echo "checked";
                                    }
                                    ?>
                                >
                                <label for="female" class="btn">
                                    <i class="bi bi-gender-female me-1"></i>Female
                                </label>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($genderErr); ?>
                                </div>
                            </div>

                            <!-- Faculty -->
                            <div class="mb-3">
                                <label for="faculty" class="form-label">
                                    Faculty <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                                    <select
                                        class="form-select <?php echo $facultyErr ? 'is-invalid' : ''; ?>"
                                        name="faculty"
                                        id="faculty"
                                    >
                                        <option value="">-- Select faculty --</option>

                                        <option value="computer"
                                            <?php
                                            if (!$success && isset($_POST["faculty"])
                                                && $_POST["faculty"] == "computer") {
                                                echo "selected";
                                            }
                                            ?>>
                                            Computer and IT
                                        </option>

                                        <option value="medicine"
                                            <?php
                                            if (!$success && isset($_POST["faculty"])
                                                && $_POST["faculty"] == "medicine") {
                                                echo "selected";
                                            }
                                            ?>>
                                            Medicine and Health Science
                                        </option>

                                        <option value="engineering"
                                            <?php
                                            if (!$success && isset($_POST["faculty"])
                                                && $_POST["faculty"] == "engineering") {
                                                echo "selected";
                                            }
                                            ?>>
                                            Engineering
                                        </option>

                                        <option value="ecom"
                                            <?php
                                            if (!$success && isset($_POST["faculty"])
                                                && $_POST["faculty"] == "ecom") {
                                                echo "selected";
                                            }
                                            ?>>
                                            Business
                                        </option>
                                    </select>
                                </div>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($facultyErr); ?>
                                </div>
                            </div>

                            <!-- Languages -->
                            <div class="mb-3">
                                <label class="form-label d-block">
                                    Languages <span class="text-danger">*</span>
                                </label>

                                <?php
                                $languages = ["Somali", "English", "Arabic", "Chinese"];

                                foreach ($languages as $language) {
                                    $checked = (
                                        !$success
                                        && isset($_POST["languages"])
                                        && in_array($language, $_POST["languages"])
                                    ) ? "checked" : "";
                                ?>

                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        name="languages[]"
                                        id="<?php echo strtolower($language); ?>"
                                        value="<?php echo $language; ?>"
                                        <?php echo $checked; ?>
                                    >

                                    <label
                                        class="btn"
                                        for="<?php echo strtolower($language); ?>"
                                    >
                                        <?php echo $language; ?>
                                    </label>

                                <?php } ?>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($langErr); ?>
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="mb-4">
                                <label for="comment" class="form-label">
                                    Comment <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    class="form-control <?php echo $commentErr ? 'is-invalid' : ''; ?>"
                                    name="comment"
                                    id="comment"
                                    rows="4"
                                    placeholder="Write your comment here..."
                                ><?php
                                    if (!$success && isset($_POST["comment"])) {
                                        echo htmlspecialchars($_POST["comment"]);
                                    }
                                ?></textarea>

                                <div class="error-text">
                                    <?php echo htmlspecialchars($commentErr); ?>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex gap-2">
                                <button
                                    type="submit"
                                    name="submit"
                                    class="btn btn-register"
                                >
                                    <i class="bi bi-check2-circle me-1"></i>Register
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-outline-secondary btn-clear"
                                    onclick="clearForm(this.form)"
                                >
                                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                                </button>
                            </div>

                        </fieldset>

                    </form>

                </div>

                <div class="card-footer text-center text-muted py-3">
                    Student Registration System
                </div>

            </div>

        </div>
    </div>

</div>



</body>
</html>