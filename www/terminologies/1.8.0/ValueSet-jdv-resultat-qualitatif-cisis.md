# Jdv Resultat Qualitatif CISIS - Terminologies de Santé v1.8.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Jdv Resultat Qualitatif CISIS**

## ValueSet: Jdv Resultat Qualitatif CISIS 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://smt.esante.gouv.fr/fhir/ValueSet/jdv-resultat-qualitatif-cisis | *Version*:20260311144903 | |
| Active as of 2026-03-11 | *Responsible:*Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:JdvResultatQualitatifCisis |
| *Other Identifiers:*OID:1.2.250.1.213.1.1.5.832 | | |

 
Jdv Resultat Qualitatif CISIS 

 **References** 

Ce jeu de valeurs n'est pas utilisé ici ; il peut être utilisé autre part (par exemple dans les spécifications et / ou implémentations qui utilisent ce contenu)

###  Recherche en live sur le SMT 

Indiquer un mot clé puis taper sur "enter" :

```
Requête sur le SMT
```

### Définition logique (CLD)

 

### Expansion

No Expansion for this valueset (Unknown Code System)

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
  "id" : "jdv-resultat-qualitatif-cisis",
  "meta" : {
    "versionId" : "1",
    "lastUpdated" : "2026-03-11T15:29:02.253+01:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "language" : "fr-FR",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2026-03-01T00:00:00+01:00"
    }
  }],
  "url" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-resultat-qualitatif-cisis",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.1.5.832"
  }],
  "version" : "20260311144903",
  "name" : "JdvResultatQualitatifCisis",
  "title" : "Jdv Resultat Qualitatif CISIS",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-11T14:49:03+01:00",
  "publisher" : "Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "Jdv Resultat Qualitatif CISIS",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FRA"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "10828004",
        "display" : "positif(-ive)"
      },
      {
        "code" : "en attente",
        "display" : "positif – séroconversion"
      },
      {
        "code" : "en attente",
        "display" : "positif-multiplication par 4"
      },
      {
        "code" : "260385009",
        "display" : "négatif(-ive)"
      },
      {
        "code" : "en attente",
        "display" : "douteux"
      },
      {
        "code" : "373068000",
        "display" : "non déterminé(e)"
      },
      {
        "code" : "125154007",
        "display" : "échantillon insatisfaisant pour l'évaluation"
      },
      {
        "code" : "17621005",
        "display" : "normal"
      },
      {
        "code" : "260405006",
        "display" : "trace"
      },
      {
        "code" : "371879000",
        "display" : "anormalement haut(e)"
      },
      {
        "code" : "1345200000",
        "display" : "présence + sur ++"
      },
      {
        "code" : "1345201001",
        "display" : "présence ++ sur ++"
      },
      {
        "code" : "441614007",
        "display" : "présence + sur +++"
      },
      {
        "code" : "441517005",
        "display" : "présence ++ sur +++"
      },
      {
        "code" : "441521003",
        "display" : "présence +++ sur +++"
      },
      {
        "code" : "373121007",
        "display" : "test non effectué"
      }]
    }]
  }
}

```
