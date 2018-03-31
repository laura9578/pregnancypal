-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 10:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pregnancy_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `terminology`
--

CREATE TABLE `terminology` (
  `id` int(4) NOT NULL,
  `term` varchar(150) NOT NULL,
  `definition` text,
  `timesSearched` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminology`
--

INSERT INTO `terminology` (`id`, `term`, `definition`, `timesSearched`) VALUES
(1, 'Caesarean section', 'A caesarean section, or C-section, is when surgical interference is necessary to deliver the baby. It involves an incision into the mothers uterus in order to deliver the baby safely. It is most commonly used when there are complications such as the baby showing signs of distress.', 0),
(2, 'Forceps', 'A small surgical instrument resembling a pair of tongs.', 0),
(3, 'Antenatal', 'Anything referred to as antenatal means \'before birth.\'', 0),
(4, 'Amniotic Fluid', 'This refers to the water/liquid that surrounds and protects the baby before it is born.', 0),
(5, 'Breech', 'This refers to the position of the baby where the bottom is first to appear during birth rather than the head.', 0),
(6, 'Ectopic Pregnancy', 'This is when a pregnancy develops somewhere other than the uterus. Most often it occurs in the fallopian tubes, and must be terminated due to the risk it causes the mother.', 0),
(7, 'Placenta', 'This is the tissue connecting the mother and the baby', 0),
(8, 'Postnatal', 'Anything referred to as postnatal means \'after the birth\'', 0),
(9, 'Albumin ', 'This is protein than can appear in the urine when pregnant. It can be a sign of infection or pre-eclampsia. A midwife will test for albumin in the urine at each antenatal appointment.', 0),
(10, 'Amniocentesis', 'This is a test which is carried out using a thin needle. It is inserted into the uterus through the abdominal wall to take a sample of fluid surrounding the baby. This sample is then used to check for certain chromosomal abnormalities and genetic disorders. It is usually carried out between weeks 15 and 18, though it can be used in later pregnancy in order to check if the baby\'s lungs are mature.', 0),
(11, 'Anaesthetics', 'These are medicines that are designed to reduce or take away pain. General anaesthetic means you are being put to sleep.', 0),
(12, 'Baby Blues', 'This term describes feeling sad or mildly depressed in the immediate days after the baby is born. Baby blues are very common with 8 out of 10 mothers saying they have experienced feeling like this. It can be caused by hormonal changes, tiredness or even discomfort but usually only lasts for about a week. More sever depression can occur however, and this is known as postnatal depression.', 0),
(13, 'Bereavement', 'This is the loss of a person. Coping with bereavement can be extremely difficult especially when pregnant, or after just giving birth. This however could be experienced if it is your baby that has died, though there is plenty of help and support available to you. ', 0),
(14, 'Birth Plan', 'This is a written record of what you would like to happen during pregnancy, labour and childbirth. ', 0),
(15, 'Catheter', 'A thin, flexible tube used to perform various diagnostic/therapeutic procedures. They may be used for the injection of fluids or medication into an area of the body, or they might be used for drainage of fluids from a surgical site or from the bladder.', 0),
(16, 'Cervix', 'The neck of the uterus. It is normally almost closed, with only a small opening for blood to pass through during monthly periods. During labour, the cervix will dilate (open up) to let the baby move down from the uterus to the vagina prior to the birth. ', 0),
(17, 'Colostrum', 'The milk produced by the breasts during the end of pregnancy and the first few days after the baby is born. It is filled with antibodies which protect the baby against infection. It has a creamy appearance and can be sometimes slightly yellow in colour. ', 0),
(18, 'Conception', 'This is the start of the pregnancy. When the egg is fertilized and begins its decent down through the fallopian tube to the uterus, where it will attach itself to the uterine wall and begin its 9 months of growing.', 0),
(19, 'Contraception', 'These are methods to prevent pregnancy from occurring. There are many different forms of contraception, and they are readily available for both men and women from most shops, pharmacies or healthcare professionals. ', 0),
(20, 'Cot death', 'The sudden or unexpected death of a seemingly healthy infant during their sleep. There is a lot of information available online or from the hospital regarding cot death, as well as some preventative measures which can be taken to avoid such an event.', 0),
(21, 'Down\'s syndrome', 'A lifelong disease caused by an abnormal number of chromosomes within the body. People born with this disease have some degree of learning difficulties and are ore at risk of certain health problems. It affects their physical growth and facial appearance predominantly. You can seek further advice on down\'s syndrome from any healthcare provider.', 0),
(22, 'Embryo', 'This is the term that is used for the developing baby during the first 8 weeks of pregnancy.', 0),
(23, 'Entonox', 'A.K.A gas and air.\r\nA form of pain relief which is offered during labour. It is a mixture of oxygen and nitrous oxide and is administered by breathing through a mask or mouthpiece.', 0),
(24, 'Epidural', 'This is a form of pain relief that is offered during labour. It will only be available up until a certain point of labour. It is an anaesthetic that numbs the lower half of the body. This is particularly useful for mothers experiencing a long and painful labour. It is administered through a catheter which is placed between the vertebrae to deliver the medicine to the nerves in the spinal cord.', 0),
(25, 'Episotomy', 'A surgical incision made between the vagina and the perineum(anus). It is done during the last stages of labour to expand the opening of the vagina to speed up the birth, or to prevent tearing caused by the baby during the birth. This is not always done for every birth, it will only be done if a midwife has deemed it necessary.', 0),
(26, 'Fallopian tubes', 'Branch-like tubes which lead from the ovaries to the uterus. The eggs travel down these tubes to the uterus every month where they are shed if unfertilized, or they embed into the uterine lining if successfully fertilized. The fertilization itself occurs within the fallopian tube.', 0),
(27, 'Fertilization', 'Fertilization occurs if a man\'s sperm successfully joins with a woman\'s egg in the fallopian tube. ', 0),
(28, 'Fetal alcohol syndrome', 'Fetal alcohol syndrome (FAS) can cause children to have restricted growth, heart defects and facial abnormalities, along with learning and behavioural disorders.\r\nThis can occur if your baby is exposed to too much alcohol via the placenta when they are in the womb. The simple way to avoid fetal alcohol syndrome is to avoid alcohol completely during pregnancy.', 0),
(29, 'Fetus', 'The term used for the developing baby from week 8 of pregnancy until birth.', 0),
(30, 'Folic acid', 'This is a prenatal vitamin found among the B group of vitamins. It occurs naturally in leafy green vegetables, fortified breakfast cereals and brown rice. It is very important during early pregnancy as it can help prevent birth defects known as neural tube defects. A pregnant woman should take one folic acid tablet a day from conception until they are 12 weeks pregnant. ', 0),
(31, 'Fontanelle', 'A diamond-shaped patch on the front and top of the baby\'s head where the bones in the skull are not yet fused together. They are soft in order to aid delivery and allow the baby\'s head to pass through the birth canal. This bones are usually fused together by the child\'s second birthday.', 0),
(32, 'Formula', 'Cows milk which has been processed so that babies can digest it. It comes in powder or liquid form and there are various different brands. Most brands even have special formula for babies with colic, or extra hungry babies.', 0),
(33, 'Fundus', 'The top of the womb', 0),
(34, 'Haemoglobin', 'Haemoglobin (Hb) is found in red blood cells and carries oxygen from the lungs all around the body. Pregnant women produce more haemoglobin as a result of the increase in blood flow. If not enough haemoglobin is produced it can cause anaemia which will result in extreme tiredness. A pregnant woman will have her haemoglobin levels checked during her antenatal appointments.', 0),
(35, 'Home birth', 'Giving birth at home with care provided by a midwife. Sometimes due to a sudden birth, giving birth at home might be the only option. If this is the case call your healthcare provider immediately for assistance.', 0),
(36, 'Induced', 'To be induced in when the hospital will artificially or prematurely stimulate labour. Labour might be induced if the pregnancy has gone past term (40 weeks), or if there are health risks to either the mother or the baby.', 0),
(37, 'Jaundice', 'The development of a yellow colour to the baby\'s skin and a yellowness in the whites of their eyes. It is nothing to worry about in most cases. It is cause by an excess of the pigment bilirubin in the blood. It is fairly common in new born babies and usually occurs 3 days after the birth, and lasts as long as 2 weeks after the birth. It is easily treated by phototherapy, which simply means placing the baby under a bright light or near a window with sunshine.\r\nIf a baby has signs of jaundice for more than 2 weeks then seek advice from your healthcare provider.', 0),
(38, 'Lanugo', 'Very fine soft hair that covers the baby at approximately 22 weeks gestation. The lanugo disappears before birth at full term. This means it may still be seen on babies that are born premature or pre-term. ', 0),
(39, 'Mastitis', 'An infection which occurs in the breasts and is associated with blocked milk ducts. Symptoms of this can include hot, tender and hard breasts along with flu-like symptoms.', 0),
(40, 'Meconium', 'This is the black tar-like substance that is otherwise known as your baby\'s first bowel movement. It is made up of what they have swallowed during their time in the uterus which includes mucus and bile. It is sticky and can be green/black in colour though it has no odor. ', 0),
(41, 'Midwife', 'A midwife is the main provider of care for a pregnant woman. They are highly skilled and qualified professionals who provide care to women during their pregnancy, childbirth and after the birth.', 0),
(42, 'Midwife-led care', 'Midwife-led care is care for a pregnant woman where the midwife is the lead professional. This type of care is suitable for women who are considered to have a low risk, uncomplicated pregnancy.', 0),
(43, 'Neonatal care', 'Care given to sick or premature babies. It takes place in the neonatal unit within the hospital, which is specially designed and equipped for this type of care.', 0),
(44, 'Nuchal translucency scan', 'An ultrasound scan to help identify whether there is a risk of having a baby with down\'s syndrome. This scan is done at 11 to 13 weeks and and measures the amount of nuchal translucency present, which is the fluid behind the neck of the baby. If a baby is at risk of having down\'s syndrome there will be more fluid present around their neck. This scan can also confirm the accuracy of the pregnancy dates as well as identify any other potential health problems.', 0),
(45, 'Obstetric cholestasis', 'A potentially dangerous liver disorder. Symptoms can include severe generalized itching without a rash, particularly in the last four months of pregnancy. If you are worried about this condition, contact your healthcare provider.', 0),
(46, 'Obstetrician', 'A doctor specializing in the care of women during their pregnancy, labour, and after the birth.', 0),
(47, 'Oedema', 'This is more commonly known as swelling, and particularly references the hands and feet. It is nothing to be concerned about, however if a pregnant woman has high blood pressure and it gets worse suddenly this can be a sign of pre-eclampsia.', 0),
(48, 'Paediatrician', 'A doctor specializing in the care of babies and children', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `terminology`
--
ALTER TABLE `terminology`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `terminology`
--
ALTER TABLE `terminology`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
