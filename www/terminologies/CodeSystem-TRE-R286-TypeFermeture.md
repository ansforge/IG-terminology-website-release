# TRE_R286_TypeFermeture - Terminologies de Santé v1.8.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TRE_R286_TypeFermeture**

## CodeSystem: TRE_R286_TypeFermeture 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://mos.esante.gouv.fr/NOS/TRE_R286-TypeFermeture/FHIR/TRE-R286-TypeFermeture | *Version*:20251016120000 | |
| Active as of 2025-10-16 | *Responsible:*Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris | *Computable Name*:TRE_R286_TypeFermeture |
| *Other Identifiers:*OID:1.2.250.1.213.1.6.1.136 | | |

 
Type de fermeture, codes provenant du FINESS pour les EJ et EG 

 Cette terminologie de référence (CodeSystem) est référencé dans la définition de contenu des jeux de valeurs (ValueSet) suivants : 

* [JDV_J185_TypeFermeture_ROR](ValueSet-JDV-J185-TypeFermeture-ROR.md)
* [JDV_J201_TypeFermeture_ROR](ValueSet-JDV-J201-TypeFermeture-ROR.md)
* [JDV_J260_TypeFermeture_RASS](ValueSet-JDV-J260-TypeFermeture-RASS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TRE-R286-TypeFermeture",
  "meta" : {
    "versionId" : "9",
    "lastUpdated" : "2025-10-31T15:01:40.118+01:00",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem"]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
    "valuePeriod" : {
      "start" : "2019-01-25T12:00:00+01:00"
    }
  }],
  "url" : "https://mos.esante.gouv.fr/NOS/TRE_R286-TypeFermeture/FHIR/TRE-R286-TypeFermeture",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.250.1.213.1.6.1.136"
  }],
  "version" : "20251016120000",
  "name" : "TRE_R286_TypeFermeture",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-10-16T12:00:00+01:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "description" : "Type de fermeture, codes provenant du FINESS pour les EJ et EG",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FRA"
    }]
  }],
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
  "property" : [{
    "code" : "dateValid",
    "description" : "date de validité d'un code concept",
    "type" : "dateTime"
  },
  {
    "code" : "dateMaj",
    "description" : "Date de mise à jour d'un code concept",
    "type" : "dateTime"
  },
  {
    "code" : "dateFin",
    "description" : "Date de fin d'exploitation d'un code concept",
    "type" : "dateTime"
  },
  {
    "code" : "deprecationDate",
    "uri" : "http://hl7.org/fhir/concept-properties#deprecationDate",
    "description" : "Date Concept was deprecated",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A property that indicates the status of the concept.",
    "type" : "code"
  },
  {
    "code" : "retirementDate",
    "uri" : "http://hl7.org/fhir/concept-properties#retirementDate",
    "description" : "Date Concept was retired",
    "type" : "dateTime"
  }],
  "concept" : [{
    "code" : "DEF",
    "display" : "Définitive",
    "definition" : "Désigne la fermeture définitive d’un élément de l’organisation interne d’un établissement de santé",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2025-10-16T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "ERR",
    "display" : "Erreur",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "NDI",
    "display" : "Non défini",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "CHP",
    "display" : "Sortie du champ FINESS",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "EML",
    "display" : "Ancienne autorisation fonctionnement EML",
    "designation" : [{
      "language" : "fr-FR",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Anc autor fonct EML"
    }],
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "PRO",
    "display" : "Provisoire",
    "definition" : "Désigne la fermeture provisoire d’un élément de l’organisation interne d’un établissement santé. L’utilisateur du référentiel ROR qui sélectionne cette valeur doit alors obligatoirement renseigner une date de réouverture de l’élément en question.",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2019-01-25T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2025-10-16T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  },
  {
    "code" : "PRE",
    "display" : "Prévisionnelle",
    "definition" : "Désigne la fermeture prévisionnelle d’un élément de l’organisation interne d’un établissement santé. L’utilisateur du référentiel ROR qui sélectionne cette valeur a alors la possibilité de renseigner une date de réouverture de l’élément en question.",
    "property" : [{
      "code" : "dateValid",
      "valueDateTime" : "2025-09-15T12:00:00+01:00"
    },
    {
      "code" : "dateMaj",
      "valueDateTime" : "2025-10-16T12:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    }]
  }]
}

```
