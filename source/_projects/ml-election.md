---
title: Machine Learning appliqué à l’analyse électorale
title_en: "Machine Learning for Electoral Analysis"
date: 2023-11-30
category: Data Science / ML
category_en: "Data Science / ML"
stack:
  - Python
  - Pandas
  - Scikit-learn
  - SHAP
cover_image: /assets/images/uploads/aab.png
gallery:
  - /assets/images/uploads/aaa.png
  - /assets/images/uploads/accccc.png
excerpt: Prédiction du parti victorieux par État américain (Élections 2020) à
  partir d'indicateurs socio-démographiques.
excerpt_en: Predicting political outcomes through socio-demographic data.
body_en: >
  This project was conducted as part of "Les Essentiels du Data Scientist" training at DATAGONG. The goal was to predict the winning party in each U.S. state for the 2020 presidential election.


  ### The Problem:

  Can we predict election results using only socio-economic indicators (without using previous election results)? This was treated as a binary classification problem (1: Republican, 0: Democrat).


  ### Methodology & Approach:

  - **Data Prep**: Merging multiple datasets and conducting deep Exploratory Data Analysis (EDA).

  - **Feature Engineering**: Selection of relevant variables and categorical encoding.

  - **Modeling**: Implementation of Logistic Regression (baseline) and Non-linear models (Random Forest).

  - **Optimization**: Hyperparameter tuning using GridSearchCV.

  - **Interpretability**: Global (Feature Importance) and local (SHAP) model interpretation.
source_url: https://github.com/TAMOUZimePascal/DATAGONG_PROJECT
---

Projet réalisé dans le cadre de la formation "Les Essentiels du Data Scientist" – DATAGONG.
Objectif : prédire le parti politique victorieux dans chaque État américain lors des élections de 2020 à partir de données socio-démographiques.

### Problématique
Peut-on expliquer et prédire le résultat d’une élection à partir d’indicateurs socio-économiques, sans utiliser les résultats passés ?

### Approche & Méthodologie
- Fusion de jeux de données et analyse exploratoire approfondie.
- Feature engineering et sélection de variables.
- Implémentation via pipelines reproductibles.

### Modélisation
- Régression Logistique (baseline) et Random Forest.
- Optimisation des hyperparamètres (GridSearchCV).
- Interprétabilité locale (SHAP) et globale.

### Compétences mobilisées
Python, Pandas, Scikit-learn, Data Visualization, Feature Engineering.
