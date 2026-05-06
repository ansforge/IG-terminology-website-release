# JDV Type Evenement Ssiad CISIS - Terminologies de Santé v1.9.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **JDV Type Evenement Ssiad CISIS**

## ValueSet: JDV Type Evenement Ssiad CISIS 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-evenement-ssiad-cisis | *Version*:20260420150250 | |
| Active as of 2026-04-20 | *Responsible:*Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:JdvTypeEvenementSsiadCisis |
| *Other Identifiers:*OID:1.2.250.1.213.1.1.5.811 | | |

 
JDV Type Evenement Ssiad CISIS 

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
  "id" : "jdv-type-evenement-ssiad-cisis",
  "meta" : {
    "versionId" : "8",
    "lastUpdated" : "2026-04-20T16:59:24.005+02:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "language" : "fr-FR",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2024-09-24T00:00:00+01:00"
    }
  }],
  "url" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-evenement-ssiad-cisis",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.1.5.811"
  }],
  "version" : "20260420150250",
  "name" : "JdvTypeEvenementSsiadCisis",
  "title" : "JDV Type Evenement Ssiad CISIS",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-20T15:02:50+01:00",
  "publisher" : "Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "JDV Type Evenement Ssiad CISIS",
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
        "code" : "MED-1296",
        "display" : "Intervention d'un aide soignant"
      },
      {
        "code" : "MED-1297",
        "display" : "Intervention d'un infirmier libéral"
      },
      {
        "code" : "MED-1298",
        "display" : "Intervention d'un infirmer salarié"
      },
      {
        "code" : "MED-1299",
        "display" : "Intervention conjointe"
      },
      {
        "code" : "MED-1311",
        "display" : "Prise en charge infirmier du diabète insulinotraité"
      },
      {
        "code" : "MED-1322",
        "display" : "Intervention d'un aide médico-psychologique"
      },
      {
        "code" : "MED-1323",
        "display" : "Intervention d'un accompagnant éducatif et social"
      },
      {
        "code" : "MED-1324",
        "display" : "Intervention d'un infirmier d'un centre de santé infirmier"
      }]
    }]
  }
}

```
