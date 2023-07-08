// Sample data for resume
const resumeData = {
    name: 'Soumya Rathi',
    email: 'rathisoumxxxx@gmail.com',
    phone: '93xxxxxxx',
    experience: [
      { position: 'Research and Development Head', company: 'IEEE_PCS', duration: '2023 - Present' },
      
    ],
    education: [
      { degree: 'Bachelor of Technology', institution: 'VIT Vellore', year: '2021' },
      { degree: 'High School Diploma', institution: 'Carmel Convent School', year: '2018' }
    ],
    skills: ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL','DBMS','Python', 'Cpp', 'OOPS']
  };
  
  // Function to update resume details on the page
  function updateResume() {
    document.getElementById('name').textContent = resumeData.name;
    document.getElementById('email').textContent = resumeData.email;
    document.getElementById('phone').textContent = resumeData.phone;
  
    const experienceList = document.getElementById('experience-list');
    resumeData.experience.forEach(item => {
      const listItem = document.createElement('li');
      listItem.textContent = `${item.position} at ${item.company} (${item.duration})`;
      experienceList.appendChild(listItem);
    });
  
    const educationList = document.getElementById('education-list');
    resumeData.education.forEach(item => {
      const listItem = document.createElement('li');
      listItem.textContent = `${item.degree} from ${item.institution} (${item.year})`;
      educationList.appendChild(listItem);
    });
  
    const skillsList = document.getElementById('skills-list');
    resumeData.skills.forEach(skill => {
      const listItem = document.createElement('li');
      listItem.textContent = skill;
      skillsList.appendChild(listItem);
    });
  }
  
  // Call the updateResume() function to display resume details on page load
  window.addEventListener('load', updateResume);
  