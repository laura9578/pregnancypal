-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 09:58 PM
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
-- Table structure for table `pregnancy_by_week`
--

CREATE TABLE `pregnancy_by_week` (
  `id` int(4) NOT NULL,
  `user_id` int(255) NOT NULL,
  `mumsdev` text NOT NULL,
  `babydev` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy_by_week`
--

INSERT INTO `pregnancy_by_week` (`id`, `user_id`, `mumsdev`, `babydev`) VALUES
(1, 0, 'Week one and conception/ fertilization hasn\'t occurred yet. This means that there wont be any symptoms or development for this week. This is the time for preparing for pregnancy by helping your partner to stay active and eat healthier to encourage a quicker conception.', 'At this stage the baby is still an idea that mum and dad are hoping becomes a reality. In a few short weeks fertilization can occur and your baby will begin its growing process.'),
(2, 0, 'This week you and your partner have just conceived. Most women at this stage won\'t be aware that they are pregnant. If your partner has been monitoring her basal body temperature she might notice a slight spike in her temperature. Although it will not be outwardly apparent now, her body is beginning the necessary changes to carry your baby to term.', 'Congratulations! Even though you may not know it you are pregnant!!\r\nThe cells in the body have merged together forming a zygote, which begins developing rapidly over the week, before implanting itself into the uterine wall. Your little baby is now termed as a blastocyst and the areas that will eventually form the embryo, amniotic sac and the placenta are taking shape.'),
(3, 0, 'Your baby has now implanted into your partners uterine wall and will continue its growth over the next 37 weeks. Your partner is also beginning to produce the hormone HCG which will give the give that positive test result. Though your partner may not know at this stage that she is pregnant, she may also be experiencing bloating, cramping or mood swings, and these might be the first symptoms of pregnancy. Your partner may also notice some light spotting, which you can reassure her is likely due to implantation.', 'The cells that are forming your baby have been undergoing a lot of changes and has now developed into two distinct layers. These two layers will form all of your babies organs and body parts. This week may also be an exciting one as your pregnancy might now be detectable on a home pregnancy test. As well as that, it is fascinating to know that at this early stage your baby already has a genetically predetermined hair and eye colour.'),
(4, 0, 'Your partner might get the first notion that she is pregnant at this stage. It can be hard to tell the symptoms apart from regular period pains, but mum might notice bloating, nausea or mild cramping at this point. For most the nausea and vomiting is still to come. Your partner may notice some food aversions but this is a normal start to the roller coaster of pregnancy.', 'Your little one is now the size of a poppy seed. The placenta has also begun to form at this stage and will transport vital materials such as oxygen and food to your baby by the end of this week. The neural tube which will eventually become your babies brain and spinal cord is forming. Your baby also consists now of 3 \'germ\' layers. The endoderm becomes the lungs and most other organs, the mesoderm grows into the heart and skeleton and the ectoderm which makes up the nervous system.'),
(5, 0, 'This is the time when your partner will be missing their first period, and if it hasn\'t already kicked in, nausea may be just around the corner. You might be able to help your partner with the nausea by combating it with things like peppermint and ginger. \r\n\r\nYour partner may also be experiencing physical symptoms such as sore breasts and a more frequent urge to use the bathroom. You might want to support your partner by helping them eat a healthy diet and engage in some light physical activity. Your partner will also need to start taking prenatal vitamins to aid the development of the baby. The healthier the mum, the healthier the baby will grow.', 'Your baby is now resembling a tiny tadpole and is approximately the size of a black peppercorn. The neural tube has grown a tail at this stage, however don\'t worry, this will be long gone before the baby is born. \r\n\r\nMost of the babies development at this stage is occurring in the brain, but your baby is primarily made up of its heart. Its circulatory system is nearly ready to go already, and its heart is beginning to form separate chambers. If you were to have an ultrasound now you might even be lucky enough to detect the heartbeat. \r\n\r\nYour baby is growing rapidly and nearly doubling in size each week. Major organs such as the stomach and liver, as well as bodily systems like the nervous system and digestive system are steadily developing. '),
(6, 0, 'During the 6th week of pregnancy most mothers-to-be will experience nausea, which usually occurs in the morning. Your partner might want some space in the morning, or alternatively want your support during these phases of morning sickness. Though it is important to note that morning sickness is not exclusive to the mornings. To try and help your partner combat the morning sickness, you can advise that she cuts out greasy or spicy foods, stays hydrated by drinking plenty of water, and gets plenty of rest.\r\n\r\nAt this week of pregnancy your partner will also experience increased fatigue to the point where small tasks can be significantly more daunting. Your partner is producing more blood than usual resulting in lower blood sugars and lower blood pressure. \r\n\r\nYour partner might also be experiencing painful breasts. This tenderness she is feeling may last through the entire first trimester of the pregnancy as a result of the breasts continuously growing. \r\n\r\nSpotting or bleeding in early pregnancy can be very common, however if your partner experiences this then it is best to call your healthcare provider and have everything checked over, as this could be an indicator of a miscarriage or an ectopic pregnancy. ', 'Bump is now the size of a blueberry this week, and measures approximately a quarter of an inch long. Your baby has progressed rapidly from the bunch of cells it started out as, and now its eyes and and nose are beginning to form, though they appear as no more than dark spots. \r\n\r\nThe development of your little ones lower body currently lags behind that of the upper body. Your baby at this stage is mostly made up of its head. At this stage as well, your baby is starting to straighten out from its previously curled up position. \r\n\r\nThese weeks are the most vital for your little ones development. Folic acid and other prenatal vitamins and a healthy diet can prevent neural tube defects which is crucial at this point. '),
(7, 0, 'This could be a rough week for your partner in terms of symptoms. However, she may also be one of the lucky few to experience no symptoms. This is common, but if you have any concerns you can always check with your healthcare provider. \r\n\r\nNow may also be a good time to discuss with your partner about how involved in the appointments you wish to be. You might want to go to all appointments and classes, or you may want to be present for just the big appointments like the 3 month scan. \r\n\r\nYour partner most notably will experience an increased frequency in trips to the bathroom. This is due to the uterus growing and the resulting pressure of this. Unfortunately, this is a symptom she is unlikely to see subside until after the birth or your baby. You or your partner might have also noticed an increase in the size of the breasts at this stage, and you partner may be feeling some discomfort with this. You can suggest the likes of a maternity bra to help ease this discomfort if she hasn\'t already got one.\r\n\r\nFood aversions and cravings will be more common at this stage so be careful about what food you cook or eat around your partner, as it may cause her to feel or be sick. This is a result of all the hormones that are coursing through the body at this stage. These hormones can also cause an increase in acne as well as the production of extra saliva. ', 'Your baby this week is similar in size to a little raspberry, and its brain is growing at the rate of approximately 100 cells every minute. That\'s a lot! Your baby is now over half an inch long. \r\n\r\nYour baby is starting to become more complex and human-like by this week. The heart and the kidneys are both starting development this week, as well as the beginnings of teeth and little buds on the end of the arm buds that will eventually form your little ones hands. \r\n\r\nThe beginnings of legs and toes are now starting to form on the little tail that your baby currently has. The head is still the most prominent part of development however, the tongue, ears and eyes are beginning to develop and it\'s little bones are starting to harden as well. '),
(8, 0, 'This week you or your partner might begin to notice a little bump in her midsection, unfortunately, at this early stage this is more likely to be water retention or bloating than the baby, as the uterus wouldn\'t have started growing outwards yet. \r\n\r\nCravings and aversions will be in full swing by now. It is not 100% certain what causes these symptoms, though it is considered to be a result of hormones. It is important to remind your partner that despite any cravings she may have, the healthier she eats the healthier the baby will be throughout the pregnancy. \r\n\r\nOne theory regarding cravings is that it is natures way of telling what nutrients the body and baby are in need of. Though it is unlikely that this is cause of cravings, and it is more likely caused by the heightened sense of smell. \r\n\r\nThis week you might see a decline in your partners mood swings (Yay! I hear you say). This is because the placenta has started to take over providing food and oxygen to the baby. This allows the hormones in your partners body to take a break. Your partner might be experiencing a heightened sense of smell as well as weird and vivid dreams and nausea. If your partner is experiencing bad nausea you could advise she try sucking on a ginger lollipop, or taking a chew-able form of prenatal vitamin. Cutting down on portions sizes to eat smaller amounts more frequently can also help reduce the feeling of nausea. If your partner hasn\'t experienced any morning sickness by this week, chances are she is one of the lucky few who won\'t experience this. ', 'This week marks the last few days of your baby being an embryo. Once this occurs it means that the tiny organs that it does have at this stage are almost ready to start functioning on their own. \r\n\r\nYour little one at this stage has little webbed fingers and toes and its limbs are growing rapidly everyday to form its arms and legs. Your baby in this week is roughly the size of a strawberry and should be moving around excessively, although you wont be able to feel anything for a while yet. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pregnancy_by_week`
--
ALTER TABLE `pregnancy_by_week`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pregnancy_by_week`
--
ALTER TABLE `pregnancy_by_week`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
