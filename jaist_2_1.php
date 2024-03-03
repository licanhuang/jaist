<?php
$issueno = 'Volume 2, Issue 1, January 2024';
$issuearry = [];
$issueeach = [];
$issueeach['link'] = 'jaist_2_1_1.php';
$issueeach['title'] = 'Research on Interpretable Machine Learning Portfolio Based on Multi-factor Clustering';
$issueeach['authors'] = 'JiHui Shi, WenZheng Zhang';
$issueeach['pages'] = '1 - 10';
$issueeach['abstract'] = "The 'black box' phenomenon and limited 
interpretability present significant obstacles in machine 
learning and deep learning for portfolio management. 
Additionally, standard metrics for interpretability in machine 
learning often struggle to effectively elucidate model features in 
portfolio decision contexts. This research aims to address these 
challenges by introducing a methodology for generating easily 
interpretable portfolios. The approach involves using Random 
Forest feature importance analysis within multi-factor models, 
followed by clustering based on stock factors. Portfolios are 
generated using the Mean-CVaR model, and the effectiveness of 
the proposed explainable portfolios is evaluated through 
comparative analysis with two machine learning interpretability 
tools: SHAP and Permutation methods.";
$issuearry[] = $issueeach;
$issueeach = [];
$issueeach['link'] = 'jaist_2_1_2.php';
$issueeach['title'] = 'Bach Style Music Authoring System based on Deep Learning';
$issueeach['authors'] = 'Minghe Kong, Lican Huang';
$issueeach['pages'] = '11 - 15';
$issueeach['abstract'] = 'With the continuous improvement in various aspects in the field of artificial intelligence, the momentum of artificial intelligence with deep learning for the field of music is coming. The purpose of the research in this paper is to design a Bach style music authoring system based on deep learning. We use a LSTM neural network to train serialized and standardized music feature data. By repeated experiments, we find the optimal LSTM model which can generate imitation of Bach music. Finally the generated music is comprehensively evaluated with the form of online audition and Turing test. The repertoires which the music generation system constructed in this article are very close to the style of Bach’s original music, and it is relatively difficult for ordinary people to distinguish the musics Bach authored from ones AI created. 
';
$issuearry[] = $issueeach;
?>
<?php

require_once 'jaist-issues.php';

?>

