# JDV Score Rankin CISIS - Terminologies de Santé v1.9.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **JDV Score Rankin CISIS**

## ValueSet: JDV Score Rankin CISIS 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://smt.esante.gouv.fr/fhir/ValueSet/jdv-score-rankin-cisis | *Version*:20260420150251 | |
| Active as of 2026-04-20 | *Responsible:*Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:JdvScoreRankinCisis |
| *Other Identifiers:*OID:1.2.250.1.213.1.1.5.176 | | |

 
JDV Score Rankin CISIS 

 **References** 

Ce jeu de valeurs n'est pas utilisé ici ; il peut être utilisé autre part (par exemple dans les spécifications et / ou implémentations qui utilisent ce contenu)

###  Recherche en live sur le SMT 

Indiquer un mot clé puis taper sur "enter" :

```
Requête sur le SMT
```

### Définition logique (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "jdv-score-rankin-cisis",
  "meta" : {
    "versionId" : "9",
    "lastUpdated" : "2026-04-20T16:59:01.263+02:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "language" : "fr-FR",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2010-01-01T00:00:00+01:00"
    }
  }],
  "url" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-score-rankin-cisis",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.1.5.176"
  }],
  "version" : "20260420150251",
  "name" : "JdvScoreRankinCisis",
  "title" : "JDV Score Rankin CISIS",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-20T15:02:51+01:00",
  "publisher" : "Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "JDV Score Rankin CISIS",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FRA"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "LA6111-4",
        "display" : "Aucun symptome"
      },
      {
        "code" : "LA6112-2",
        "display" : "Pas d’incapacité en dehors des symptomes : activités et autonomie conservées"
      },
      {
        "code" : "LA6113-0",
        "display" : "Handicap faible : incapable d’assurer les activités habituelles mais autonomie"
      },
      {
        "code" : "LA6114-8",
        "display" : "Handicap modéré : besoin d’aide mais marche possible sans assistance"
      },
      {
        "code" : "LA6115-5",
        "display" : "Handicap modérément sévère : marche et gestes quotidiens impossibles sans aide"
      },
      {
        "code" : "LA10137-0",
        "display" : "Handicap majeur : alitement permanent, incontinence et soins de nursing permanent"
      },
      {
        "code" : "LA10138-8",
        "display" : "Décédé"
      }]
    }]
  }
}

```
