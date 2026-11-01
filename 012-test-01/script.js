// While loop to print numbers from 1-10
let num = 1;
while (num <= 10) {
  console.log(num);
  num++;
}

const submitBtn = document.getElementById("submit");
const resultDisplay = document.getElementById("result-display");

submitBtn.addEventListener("click", () => {
  resultDisplay.style.display = "none";
  let valid = true;
  const studentName = document.getElementById("name").value;
  const banglaInput = Number(document.getElementById("num-bangla").value);
  const englishInput = Number(document.getElementById("num-english").value);
  const mathematicsInput = Number(
    document.getElementById("num-mathematics").value,
  );
  const scienceInput = Number(document.getElementById("num-science").value);
  const ictInput = Number(document.getElementById("num-ict").value);

  // results
  const nameOut = document.getElementById("student-name");
  const totalMarks = document.getElementById("total-marks");
  const avgMarks = document.getElementById("avg-marks");
  const statusText = document.getElementById("status");
  const gradeText = document.getElementById("grade");

  // errors
  const nameError = document.getElementById("name-error");
  const banglaError = document.getElementById("bangla-error");
  const englishError = document.getElementById("english-error");
  const mathematicsError = document.getElementById("mathematics-error");
  const scienceError = document.getElementById("science-error");
  const ictError = document.getElementById("ict-error");

  nameError.textContent = "";
  banglaError.textContent = "";
  englishError.textContent = "";
  mathematicsError.textContent = "";
  scienceError.textContent = "";
  ictError.textContent = "";

  if (studentName.trim() === "") {
    nameError.textContent = "Cannot be empty";
    valid = false;
  }

  if (!banglaInput || banglaInput < 0 || banglaInput > 100) {
    banglaError.textContent = "Must be between 0 and 100";
    valid = false;
  }
  if (!englishInput || englishInput < 0 || englishInput > 100) {
    englishError.textContent = "Must be between 0 and 100";
    valid = false;
  }
  if (!mathematicsInput || mathematicsInput < 0 || mathematicsInput > 100) {
    mathematicsError.textContent = "Must be between 0 and 100";
    valid = false;
  }
  if (!scienceInput || scienceInput < 0 || scienceInput > 100) {
    scienceError.textContent = "Must be between 0 and 100";
    valid = false;
  }
  if (!ictInput || ictInput < 0 || ictInput > 100) {
    ictError.textContent = "Must be between 0 and 100";
    valid = false;
  }

  if (valid) {
    resultDisplay.style.display = "flex";

    let total =
      banglaInput + englishInput + mathematicsInput + scienceInput + ictInput;
    let avg = parseInt(total / 5);
    let grade = "F";
    let status = "Pass";

    if (avg >= 80 && avg <= 100) {
      grade = "A+";
    } else if (avg >= 70 && avg <= 79) {
      grade = "A";
    } else if (avg >= 60 && avg <= 69) {
      grade = "A-";
    } else if (avg >= 50 && avg <= 59) {
      grade = "B";
    } else if (avg >= 40 && avg <= 49) {
      grade = "C";
    } else if (avg >= 33 && avg <= 39) {
      grade = "D";
    } else if (avg < 33) {
      grade = "F";
    }

    if (
      banglaInput < 33 ||
      englishInput < 33 ||
      mathematicsInput < 33 ||
      scienceInput < 33 ||
      ictInput < 33
    ) {
      status = "Fail";
      grade = "F";
    }

    nameOut.textContent = studentName.trim();
    totalMarks.textContent = total;
    avgMarks.textContent = avg;
    statusText.textContent = status;
    if (status === "Pass") statusText.style.color = "green";
    if (status === "Fail") statusText.style.color = "red";
    gradeText.textContent = grade;
  }
});
