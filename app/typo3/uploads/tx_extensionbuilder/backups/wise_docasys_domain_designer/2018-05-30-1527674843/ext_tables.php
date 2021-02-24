<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Domain Designer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_parametereinheit', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_parametereinheit.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_parametereinheit');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_modell', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_modell.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_modell');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_werkstueck', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_werkstueck.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_werkstueck');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lastfall', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lastfall.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lastfall');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_wirkungsziel', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_wirkungsziel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_wirkungsziel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_ressource', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_ressource.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_ressource');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_gestaltungsart', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_gestaltungsart.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_gestaltungsart');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_komponententyp', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_komponententyp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_komponententyp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_auswirkung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_auswirkung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_auswirkung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_messmittel', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_messmittel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_messmittel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_messparameter', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_messparameter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_messparameter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_untersuchung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_untersuchung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_untersuchung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_entscheidung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_entscheidung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_entscheidung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_werkstoff', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_werkstoff.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_werkstoff');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_unternehmen', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_unternehmen.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_unternehmen');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lstmodellinput', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lstmodellinput.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lstmodellinput');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput', 'EXT:wise_docasys_domain_designer/Resources/Private/Language/locallang_csh_tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput');

        
        // \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Domain Manager');
    },
    $_EXTKEY
);
