# JDV Gene CISIS - Terminologies de Santé v1.9.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **JDV Gene CISIS**

## ValueSet: JDV Gene CISIS 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://smt.esante.gouv.fr/fhir/ValueSet/jdv-gene-cisis | *Version*:20260420150251 | |
| Active as of 2026-04-20 | *Responsible:*Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:JdvGeneCisis |
| *Other Identifiers:*OID:1.2.250.1.213.1.1.5.150 | | |

 
JDV Gene CISIS 

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
  "id" : "jdv-gene-cisis",
  "meta" : {
    "versionId" : "8",
    "lastUpdated" : "2026-04-20T16:58:07.649+02:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "language" : "fr-FR",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2023-02-02T00:00:00+01:00"
    }
  }],
  "url" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-gene-cisis",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.1.5.150"
  }],
  "version" : "20260420150251",
  "name" : "JdvGeneCisis",
  "title" : "JDV Gene CISIS",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-20T15:02:51+01:00",
  "publisher" : "Agence du Numérique en Santé(ANS) -2 - 10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "JDV Gene CISIS",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FRA"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://www.genenames.org/geneId",
      "concept" : [{
        "code" : "HGNC:391",
        "display" : "AKT1"
      },
      {
        "code" : "HGNC:427",
        "display" : "ALK"
      },
      {
        "code" : "HGNC:1097",
        "display" : "BRAF"
      },
      {
        "code" : "HGNC:3236",
        "display" : "EGFR"
      },
      {
        "code" : "HGNC:3430",
        "display" : "ERBB2"
      },
      {
        "code" : "HGNC:3432",
        "display" : "ERBB4"
      },
      {
        "code" : "HGNC:3689",
        "display" : "FGFR2"
      },
      {
        "code" : "HGNC:3690",
        "display" : "FGFR3"
      },
      {
        "code" : "HGNC:5173",
        "display" : "HRAS"
      },
      {
        "code" : "HGNC:6342",
        "display" : "KIT"
      },
      {
        "code" : "HGNC:6407",
        "display" : "KRAS"
      },
      {
        "code" : "HGNC:6840",
        "display" : "MAP2K1"
      },
      {
        "code" : "HGNC:7029",
        "display" : "MET"
      },
      {
        "code" : "HGNC:7989",
        "display" : "NRAS"
      },
      {
        "code" : "HGNC:8803",
        "display" : "PDGFRA"
      },
      {
        "code" : "HGNC:8975",
        "display" : "PIK3CA"
      },
      {
        "code" : "HGNC:1787",
        "display" : "CDKN2A"
      },
      {
        "code" : "HGNC:2514",
        "display" : "CTNNB1"
      },
      {
        "code" : "HGNC:2731",
        "display" : "DDR2"
      },
      {
        "code" : "HGNC:4764",
        "display" : "H3-3A"
      },
      {
        "code" : "HGNC:4776",
        "display" : "H3C2"
      },
      {
        "code" : "HGNC:5382",
        "display" : "IDH1"
      },
      {
        "code" : "HGNC:5383",
        "display" : "IDH2"
      },
      {
        "code" : "HGNC:8979",
        "display" : "PIK3R1"
      }]
    },
    {
      "system" : "https://smt.esante.gouv.fr/fhir/CodeSystem/terminologie-cisis",
      "concept" : [{
        "code" : "GEN-092.07.02",
        "display" : "Autre gène"
      }]
    }]
  }
}

```
