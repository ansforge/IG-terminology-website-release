# JDV UFCV Polarite Sonde CISIS - Terminologies de Santé v1.8.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **JDV UFCV Polarite Sonde CISIS**

## ValueSet: JDV UFCV Polarite Sonde CISIS 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://smt.esante.gouv.fr/fhir/ValueSet/jdv-ufcv-polarite-sonde-cisis | *Version*:20260311144904 | |
| Active as of 2026-03-11 | *Responsible:*Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:JdvUfcvPolariteSondeCisis |
| *Other Identifiers:*OID:1.2.250.1.213.1.1.4.2.7 | | |

 
JDV UFCV Polarite Sonde CISIS 

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
  "id" : "jdv-ufcv-polarite-sonde-cisis",
  "meta" : {
    "versionId" : "7",
    "lastUpdated" : "2026-03-11T15:29:35.285+01:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "language" : "fr-FR",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2023-04-27T00:00:00+01:00"
    }
  }],
  "url" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-ufcv-polarite-sonde-cisis",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.1.4.2.7"
  }],
  "version" : "20260311144904",
  "name" : "JdvUfcvPolariteSondeCisis",
  "title" : "JDV UFCV Polarite Sonde CISIS",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-11T14:49:04+01:00",
  "publisher" : "Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "JDV UFCV Polarite Sonde CISIS",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FRA"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://smt.esante.gouv.fr/fhir/CodeSystem/terminologie-cisis",
      "concept" : [{
        "code" : "MED-1186",
        "display" : "Quadripolaire"
      }]
    },
    {
      "system" : "https://smt.esante.gouv.fr/terminologie-emdn",
      "concept" : [{
        "code" : "J0190010101",
        "display" : "SONDES DE STIMULATION CARDIAQUE ENDOCAVITAIRES UNIPOLAIRES AURICULAIRE ET VENTRICULAIRE"
      },
      {
        "code" : "J0190010102",
        "display" : "SONDES DE STIMULATION CARDIAQUE ENDOCAVITAIRES BIPOLAIRES AURICULAIRE ET VENTRICULAIRE À FIXATION ACTIVE OU PASSIVE"
      },
      {
        "code" : "J0190010103",
        "display" : "SONDES DE STIMULATION VENTRICULAIRE GAUCHE POUR STIMULATEURS TRIPLE CHAMBRE"
      }]
    }]
  }
}

```
