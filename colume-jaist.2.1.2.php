<?php
$issuelink = 'jaist_2_1.php';
$issue = 'Volume 2, Issue 1';
$issueDatePage = ', January 2024,  Pages: 11 - 15';
$paperTitle = 'Bach Style Music Authoring System based on Deep Learning';
$downloadlink = '2/1/jaist.2.1.2.pdf';
$DOIlink = 'https://doi.org/10.5281/zenodo.10545158';
$DOI = '10.5281/zenodo.1054518';
$authors = 'Minghe Kong<sup>1</sup>
, Lican Huang<sup>2</sup>';
$authorswordks = '1 Informatics college, Zhejiang Sci-Tech Universit
</br>
2 Hangzhou Domain Zones Technology Co., Ltd.';
$corresponding = 'Lican Huang (e-mail: huang_lican@yahoo.co.uk)';
$received = 'Received 1 August 2023, Accepted 10 Janaury 2024, Available Online 21 January 2024.';
$keywords = 'AI music; Deep learning model; music data analysis; online evaluation
';

$abstract = 'With the continuous improvement in various aspects in the field of artificial intelligence, the momentum of artificial intelligence with deep learning for the field of music is coming. The purpose of the research in this paper is to design a Bach style music authoring system based on deep learning. We use a LSTM neural network to train serialized and standardized music feature data. By repeated experiments, we find the optimal LSTM model which can generate imitation of Bach music. Finally the generated music is comprehensively evaluated with the form of online audition and Turing test. The repertoires which the music generation system constructed in this article are very close to the style of Bach’s original music, and it is relatively difficult for ordinary people to distinguish the musics Bach authored from ones AI created.
';
?>

<?php
require_once 'colume-jaist-article.php';
?>