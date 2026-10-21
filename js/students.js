document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("stu-modal");
  const modalImg = document.getElementById("stu-modal-img");
  const modalName = document.getElementById("stu-modal-name");
  const modalClass = document.getElementById("stu-modal-class");
  const modalRoll = document.getElementById("stu-modal-roll");
  const modalFather = document.getElementById("stu-modal-father");
  const modalMother = document.getElementById("stu-modal-mother");
  const modalGuardianResp = document.getElementById("stu-modal-guardian-resp");
  const modalFatherFin = document.getElementById("stu-modal-father-fin");
  const modalAttendance = document.getElementById("stu-modal-attendance");
  const modalPerformance = document.getElementById("stu-modal-performance");
  const perfArrow = document.getElementById("stu-modal-performance-arrow");
  const closeBtn = document.querySelector(".stu-close");

  const students = Array.from(document.querySelectorAll(".stu-thumb"));
  let currentIndex = 0;

  function showModal(index) {
    const s = students[index];
    modal.style.display = "block";

    // Basic info
    modalImg.src = s.src;
    modalName.textContent = s.dataset.name || "তথ্য নেই";
    modalClass.textContent = s.dataset.class || "তথ্য নেই";
    modalRoll.textContent = s.dataset.roll || "তথ্য নেই";
    modalFather.textContent = s.dataset.father || "তথ্য নেই";
    modalMother.textContent = s.dataset.mother || "তথ্য নেই";
    modalGuardianResp.textContent = s.dataset.guardianResp || "তথ্য নেই";
    modalFatherFin.textContent = s.dataset.fatherFin || "তথ্য নেই";
    modalAttendance.textContent = s.dataset.attendance || "তথ্য নেই";

    // Performance + Multiple Arrows
    modalPerformance.textContent = ""; // যদি লিখিত টেক্সট না দেখাতে চাও
    perfArrow.innerHTML = ""; // clear old arrows

    // ধরলাম data-performance="ভালো,খারাপ,মধ্যম,ভালো"
    const perfList = (s.dataset.performance || "").split(",");

    perfList.forEach(perf => {
  const box = document.createElement("span");
  box.classList.add("perf-box");

  if (perf.trim() === "ভালো") {
    box.classList.add("perf-good");
  } else if (perf.trim() === "খারাপ") {
    box.classList.add("perf-bad");
  } else if (perf.trim() === "মধ্যম") {
    box.classList.add("perf-medium");
  }

  perfArrow.appendChild(box);
});


    currentIndex = index;
  }

  
  // Image click event
  students.forEach((img, idx) => {
    img.addEventListener("click", () => showModal(idx));
  });

  // Close modal
  closeBtn.addEventListener("click", () => modal.style.display = "none");
  window.addEventListener("click", (e) => {
    if (e.target === modal) modal.style.display = "none";
  });
});
